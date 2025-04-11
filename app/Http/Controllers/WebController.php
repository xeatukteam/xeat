<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\WebsiteHomepageSection;
use App\Models\WebsiteSliderImage;
use App\Models\WebIconSlider;
use App\Models\WebsiteReview;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use GuzzleHttp\Client as GuzzleClient;
use App\Models\User;

class WebController extends Controller
{
    public function home() {

        $homepageSection1      = WebsiteHomepageSection::where('id', 1)->first();
        $homepageSection2      = WebsiteHomepageSection::where('id', 2)->first();
        $homepageSection3_qrCode   = WebsiteHomepageSection::where('id', 3)->first();
        // $homepageSection4   = WebsiteHomepageSection::where('id', 4)->first();
        // $homepageSection8   = WebsiteHomepageSection::where('id', 8)->first();




        $websiteIconImages     = WebIconSlider::orderBy('sequence_number', 'asc')->get();
        $website_slider_images = WebsiteSliderImage::orderBy('id', 'asc')->get();

        // Fetch website reviews with customer & restaurant data
        $website_reviews = DB::table('website_reviews')
        ->join('users', 'website_reviews.customer_id', '=', 'users.id')
        ->join('website_icon_slider_images', 'website_reviews.restaurant_id', '=', 'website_icon_slider_images.id')
        ->select(
            'website_reviews.*', 
            'users.name as customer_name', 
            'website_icon_slider_images.title as title'
        )
        ->orderBy('website_reviews.id', 'asc')
        ->get();

       // Check if user is logged in
       $user = session()->has('user_id') ? User::find(session('user_id')) : null;

       if ($user) {
            // Fetch primary user address
            $user_address = DB::table('user_address')
                ->where('user_id', $user->id)
                ->where('is_primary', '1')
                ->first();

                $address_id = $user_address ? $user_address->id : null;

        } else {
                // Get address from session if user is not logged in
                $user_address = (object) [
                    'location' => session('selected_address', ''),
                    'lat' => session('selected_lat', ''),
                    'lng' => session('selected_lng', ''),
                ];

                $address_id = session('address_id', null); // Get address ID from session

        }

        // dd($website_reviews);

        return view('home', compact('homepageSection1', 'homepageSection2','homepageSection3_qrCode','websiteIconImages','website_slider_images','website_reviews','user','user_address','address_id'));
    }

    public function about() {
        return view('about');
    }

    public function register() {
        return view('register');
    }

    public function faq() {
        return view('faq');
    }

    public function privacy() {
        return view('privacy');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }

    public function signup() {
        return view('signup');
    }

    
    public function category(){

         // Check if user is logged in
       $user = session()->has('user_id') ? User::find(session('user_id')) : null;

       if ($user) {
            // Fetch primary user address
            $user_address = DB::table('user_address')->where('user_id', $user->id)->where('is_primary', '1')->first();
            
            $user_countrycode = User::where('id',$user->id)->value('countryCode');

            if ($user_address) {
                $user_address->countryCode = $user_address->hte ?? $user_countrycode; // Assign hte if exists, else fallback
            } else {
                $user_address = (object)[
                    'location' => '',
                    'a_lat' => '',
                    'a_long' => '',
                    'countryCode' => $user_countrycode
                ];
            }


            //$user_address->countryCode = $user_address ? $user_address->hte : $user_countrycode; // Set country code from user or address
        } else {
                // Get address from session if user is not logged in
                $user_address = (object) [
                    'location' => session('selected_address', ''),
                    'a_lat' => session('selected_lat', ''),
                    'a_long' => session('selected_lng', ''),
                    'countryCode' => session('selected_countryCode', '+94') // Default Country Code

                ];
        }

        return view('category', compact('user_address'));
    }


    public function cart(){

        $userId = session()->has('user_id') ? session('user_id') : ""; // Get user_id from session

        $accessToken = DB::table('token')->where('id','1')->value('accesstoken');


        return view('cart',compact('userId','accessToken'));
    }
    public function food_items($restaurant_id){

        $restaurant  = DB::table('vendor_restorent')->where('id',$restaurant_id)->first();
        $userId      = session()->has('user_id') ? session('user_id') : ""; // Get user_id from session
        $accessToken = DB::table('token')->where('id','1')->value('accesstoken');

        return view('food_items',compact('restaurant','userId','accessToken'));
    }

    public function order_details(){

        return view('order_details');
    }


    

    public function user_dashboard(Request $request){

        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }

        $user = User::where('id', session('user_id'))->first();


        return view('user_dashboard', compact('user'));
    }

    public function logout_user(Request $request)
    {
        Session::forget('user_id'); // Remove user session
        Session::flush(); // Clear all session data
        return response()->json(['success' => true, 'message' => 'Logout successful']);
    }


    public function otp_send_forgot(Request $request)
    {
        $client = new GuzzleClient(); // Use GuzzleClient for API requests
    
        $response = $client->post('https://xeat.co.uk/backend/API/users.php/otp_send_forgot', [
            'form_params' => [
                'accesstoken' => $request->accesstoken,
                'contact' => $request->contact
            ]
        ]);
    
        $data = json_decode($response->getBody(), true);
    
        if ($data['status'] === "200") {
            // Store OTP in session for verification
            Session::put('otp', $data['data']['otp']);
            Session::put('contact', $request->contact);
        }
    
        return response()->json($data);
    }

    public function verify_otp(Request $request)
    {
        $enteredOtp = $request->otp;
        $contact    = $request->contact;
        $accesstoken = $request->accesstoken;
        $sessionOtp = Session::get('otp');
        $sessionContact = Session::get('contact');

        if ($sessionOtp && $sessionContact && $sessionOtp == $enteredOtp) {
            Session::forget('otp'); // Clear OTP after successful verification
            return response()->json(['status' => '200', 'message' => 'OTP verified successfully']);
        } else {
            return response()->json(['status' => '201', 'message' => 'Invalid OTP']);
        }
    }

    public function store_address_session(Request $request){

        if (!$request->has('location') || !$request->has('a_lat') || !$request->has('a_long')) {
            return response()->json(['status' => 0, 'message' => 'Invalid address data.']);
        }

        session([
            'selected_address' => $request->location,
            'selected_lat'     => $request->a_lat,
            'selected_lng'     => $request->a_long,
            'phone_number'     => $request->phone_number ?? '',
            'name'             => $request->name ?? '',
            'countryCode'        => $request->dialCode ?? '',
        ]);

        return response()->json(['status' => 1, 'message' => 'Address stored.']);

    }

    public function getSessionAddress(Request $request)
    {

        
        $address = session('selected_address', '');
        $lat     = session('selected_lat', '');
        $lng     = session('selected_lng', '');

        if (!$address || !$lat || !$lng) {

            $userId = $request->input('user_id');

            $userAddress = DB::table('user_address')->where('user_id', $userId)
                           ->where('is_primary', 1)->first();


            if ($userAddress) {
                $address = $userAddress->location;
                $lat     = $userAddress->a_lat;
                $lng     = $userAddress->a_long;

            // Store in session
                session([
                    'selected_address' => $address,
                    'selected_lat'     => $lat,
                    'selected_lng'     => $lng,
                ]);
           }

        }


        return response()->json([
            'status'  => $address ? 1 : 0,
            'message' => $address ? 'Address found.' : 'No address stored.',
            'address' => $address,
            'lat'     => $lat,
            'lng'     => $lng,
        ]);
    }



    public function save_address_db(Request $request){

        if (session()->has('selected_address')) {

            $user= User::where('id',$request->user_id)->first();

            if($user){

                DB::table('user_address')
                ->where('user_id', $request->user_id)
                ->where('is_primary', 1)
                ->update(['is_primary' => 0]);

           

       

            DB::table('user_address')->insert([
                'user_id' => $request->user_id,
                'location' => session('selected_address'),
                'com_address' => '',
                'landmark' => '',
                'hte' => $user->countryCode,
                'address' => session('selected_address'),
                'a_lat' => session('selected_lat'),
                'a_long' => session('selected_lng'),
                'phone_number' => session('phone_number'),
                'name' => session('name'),
                'status' => 1,
                'is_primary' => 1, // Set as primary address
                'created_at' => now(),
            ]);
    
            // Clear session data
            session()->forget(['selected_address', 'selected_lat', 'selected_lng', 'phone_number', 'name']);

            return response()->json(['status' => 1, 'message' => 'Address saved successfully.']);


        }else{

            return response()->json(['status' => 0, 'message' => 'User not found.']);


        }


        }
    
        return response()->json(['status' => 0, 'message' => 'No address found.']);

    }

    
}
