<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\WebsiteHomepageSection;
use Illuminate\Support\Facades\View;
use App\Models\QuickLink;
use App\Models\ContactUs;

use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $homepageSection5 = WebsiteHomepageSection::where('id', 5)->first();
        $links = QuickLink::orderBy('id','asc')->get();
        $head_office = ContactUs::where('id',2)->first();
        $branch_office = ContactUs::where('id',3)->first();
        $login_page = WebsiteHomepageSection::where('id', 7)->first();
        $signup_page = WebsiteHomepageSection::where('id', 6)->first();

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

        $homepageSection4   = WebsiteHomepageSection::where('id', 4)->first();

        $homepageSection8   = WebsiteHomepageSection::where('id', 8)->first();
        $homepageSection2      = WebsiteHomepageSection::where('id', 2)->first();





        View::share([
            'homepageSection5' => $homepageSection5,
            'links'            => $links,
            'head_office'      => $head_office,
            'branch_office'    => $branch_office,
            'login_page'       => $login_page,
            'signup_page'       => $signup_page,
            'website_reviews'  =>$website_reviews,
            'homepageSection4'=>$homepageSection4,
            'homepageSection8'=>$homepageSection8,
            'homepageSection2'=>$homepageSection2,
            'apiBaseUrl' => env('API_BASE_URL'),
            'accessToken' => env('API_ACCESS_TOKEN'),
            'APP_URL'=>env('APP_URL'),


        ]);

    }
}
