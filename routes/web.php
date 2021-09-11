<?php

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

Route::prefix('/user')->middleware(['auth','user'])->group(function (){

    Route::get('/authenticate', function () {
        return view('authenticate');

    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::POST('/register_buyer', [App\Http\Controllers\ExpressController::class, 'register'])->name('register_buyer');


Route::POST('/Store_express', [App\Http\Controllers\ExpressController::class, 'create'])->name('Store_express');



Route::get('/express', function () {
    return view('express');
});

Route::get('/priority', function () {
    return view('priority');
});



Route::get('/authentication_buyer', function () {
    return view('authentication_buyer');
});




Route::get('/authGoogle', [App\Http\Controllers\ExpressController::class, 'redirectToGoogle']);


Route::get('/auth/google/callback', [App\Http\Controllers\ExpressController::class, 'handleGoogleCallback']);



Route::get('/auth/facebook', [App\Http\Controllers\ExpressController::class, 'redirectToFacebook'])->name('auth/facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\ExpressController::class, 'handleFacebookCallback']);
