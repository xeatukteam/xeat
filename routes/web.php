<?php
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;




Route::post('/set-session', function (Request $request) {
    Session::put('user_id', $request->input('user_id'));
    return response()->json(['status' => 'success', 'message' => 'Session saved']);
});

Route::post('/store_address_session', [WebController::class, 'store_address_session'])->name('store_address_session');
Route::get('/get_session_address', [WebController::class, 'getSessionAddress'])->name('get_session_address');

Route::post('/save_address_db', [WebController::class, 'save_address_db'])->name('save_address_db');

Route::get('/get-maps-key', function () {
    return response()->json([
        'key' => env('GOOGLE_MAPS_API_KEY'),
        'map_id' => env('GOOGLE_MAP_ID'),
    ]);
});

// web.php
Route::get('/cart/count', function () {
    $userId = session('user_id');
    $count = 0;
    if ($userId) {
        $count = DB::table('cart_items')
            ->join('cart', 'cart.id', '=', 'cart_items.cart_id')
            ->where('cart.user_id', $userId)
            ->sum('cart_items.count');
    }
    return response()->json(['count' => $count]);
});




Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/about_web', [WebController::class, 'about'])->name('about_web');
Route::get('/register', [WebController::class, 'register'])->name('register');
Route::get('/faq', [WebController::class, 'faq'])->name('faq');
Route::get('/privacy', [WebController::class, 'privacy'])->name('privacy');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');


//new routes here

Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/signup', [WebController::class, 'signup'])->name('signup');
Route::get('/user_dashboard', [WebController::class, 'user_dashboard'])->name('user_dashboard');
Route::post('/logout_user', [WebController::class, 'logout_user'])->name('logout_user');

Route::post('/otp_send_forgot', [WebController::class, 'otp_send_forgot'])->name('otp_send_forgot');
Route::post('/verify_otp', [WebController::class, 'verify_otp'])->name('verify_otp');




//category routes here
Route::get('/category', [WebController::class, 'category'])->name('category');

Route::get('/cart', [WebController::class, 'cart'])->name('cart');
Route::get('/food_items/{restaurant_id}', [WebController::class, 'food_items'])->name('food_items');
Route::get('/order_details', [WebController::class, 'order_details'])->name('order_details');





