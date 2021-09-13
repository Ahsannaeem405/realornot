<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/cls', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('optimize');
    $run = Artisan::call('optimize:clear');

   Session::flush();
    return 'FINISHED';
});



Route::get('/migrate', function() {
    $run = Artisan::call('migrate:fresh');
    return 'FINISHED';
});

Route::get('/seed', function() {

    $run = Artisan::call('migrate');
    $run = Artisan::call('db:seed');

    return 'FINISHED';
});




Route::get('/', function () {
    return view('index');
});

Route::get('/single', function () {
    return view('single');
});


Route::get('/service', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/buyer', function () {
    return view('buyer');
});





Route::get('/seller', function () {
    return view('seller');
});

// Route::get('/expert', function () {
//     return view('expert');
// });

Route::get('/signup_expert', function () {
    return view('signup_expert');
});

Route::get('/Jobs_detail', function () {
    return view('Jobs_detail');
});

Route::get('/Detail', function () {
    return view('Detail');
});

// Route::prefix('/user')->middleware(['auth','user'])->group(function (){

    Route::get('/authenticate', function () {
        return view('authenticate');

    });

// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::POST('/register_buyer', [App\Http\Controllers\ExpressController::class, 'register'])->name('register_buyer');


Route::POST('/update', [App\Http\Controllers\ExpressController::class, 'update'])->name('update');


Route::POST('/Store_express', [App\Http\Controllers\ExpressController::class, 'create'])->name('Store_express');

Route::POST('/Store_Seller', [App\Http\Controllers\ExpressController::class, 'Store_Seller'])->name('Store_Seller');

Route::get('edit_seller/{id}', [App\Http\Controllers\ExpressController::class, 'edit_seller']);

Route::get('edit_buyer/{id}', [App\Http\Controllers\ExpressController::class, 'edit_buyer']);

Route::get('edit_expert/{id}', [App\Http\Controllers\ExpressController::class, 'edit_expert']);






Route::get('/express', function () {
    return view('express');
});

Route::get('/EditSeller', function () {
    return view('admin.EditSeller');
});




Route::get('/StoreExpress', function () {
    return view('StoreExpress');
});


Route::get('/priority', function () {
    return view('priority');
});

Route::get('/adminn', function () {
    return view('admin.layouts.main');
});

Route::get('/admin/seller', function () {
    return view('admin.seller');
});

Route::get('/admin/buyer', function () {
    return view('admin.buyer');
});

Route::get('/admin/expert', function () {
    return view('admin.expert');
});










Route::get('/authentication_buyer', function () {
    return view('authentication_buyer');
});




Route::get('/authGoogle', [App\Http\Controllers\ExpressController::class, 'redirectToGoogle']);


Route::get('/delete/{id}', [App\Http\Controllers\ExpressController::class, 'delete']);

Route::get('/status/{id}', [App\Http\Controllers\ExpressController::class, 'status_approve']);

Route::get('/disapprove/{id}', [App\Http\Controllers\ExpressController::class, 'disapprove']);



Route::get('/auth/google/callback', [App\Http\Controllers\ExpressController::class, 'handleGoogleCallback']);



Route::get('/auth/facebook', [App\Http\Controllers\ExpressController::class, 'redirectToFacebook'])->name('auth/facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\ExpressController::class, 'handleFacebookCallback']);



Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index']);

Route::any('/charge', [App\Http\Controllers\PaymentController::class, 'charge']);

Route::get('/paymentsuccess', [App\Http\Controllers\PaymentController::class, 'payment_success']);
Route::get('/paymenterror', [App\Http\Controllers\PaymentController::class, 'payment_error']);


Route::any('stripe', [App\Http\Controllers\StripePaymentController::class, 'stripe']);
Route::post('stripe', [App\Http\Controllers\StripePaymentController::class, 'stripePost'])->name('stripe.post');



