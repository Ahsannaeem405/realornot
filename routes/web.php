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






Route::get('/product_detail', function () {
    return view('single');
});


Route::get('/service', function () {
    return view('services');
});

Route::get('/products', function () {
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

// Route::prefix('/user')->middleware(['auth','user'])->group(function (){

    Route::get('/authenticate', function () {
        return view('authenticate');

    });

// });


Auth::routes();


Route::POST('/register_buyer', [App\Http\Controllers\ExpressController::class, 'register'])->name('register_buyer');


Route::POST('/update', [App\Http\Controllers\ExpressController::class, 'update'])->name('update');

Route::POST('/expert_profile_update', [App\Http\Controllers\ExpressController::class, 'expert_profile_update'])->name('update');


Route::POST('/Store_express', [App\Http\Controllers\ExpressController::class, 'create'])->name('Store_express');

Route::POST('/Store_Seller', [App\Http\Controllers\ExpressController::class, 'Store_Seller'])->name('Store_Seller');

Route::get('edit_seller/{id}', [App\Http\Controllers\ExpressController::class, 'edit_seller']);

Route::get('edit_buyer/{id}', [App\Http\Controllers\ExpressController::class, 'edit_buyer']);

Route::get('edit_expert/{id}', [App\Http\Controllers\ExpressController::class, 'edit_expert']);

Route::get('expert_profile_edit', [App\Http\Controllers\ExpressController::class, 'expert_profile_edit']);
Route::get('withdraws', [App\Http\Controllers\ExpressController::class, 'index'])->name('.index');
Route::get('expert_withdraw_form', [App\Http\Controllers\ExpressController::class, 'addform']);
Route::post('withdraw_data', [App\Http\Controllers\ExpressController::class, 'formdataAdd']);
Route::get('/Detail/{id}', [App\Http\Controllers\ExpressController::class, 'Detail']);
Route::get('/product_status/{id}', [App\Http\Controllers\ExpressController::class, 'product_status'])->name('product_status');


// Route::get('/Detail/{id}', function () {
//     return view('Detail');
// });


Route::get('/', function () {
    return view('index');
});


Route::get('/logins', function () {
    return view('Auth.login');
});







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');











Route::get('/express', function () {
    return view('express');
});

Route::get('/Jobs_history', function () {
    return view('Jobs_history');
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






Route:: prefix('/admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/index', function () {
        return view('admin.layouts.main');
    });

    Route::get('/seller', function () {
        return view('admin.seller');
    });

    Route::get('/buyer', function () {
        return view('admin.buyer');
    });

    Route::get('/expert', function () {
        return view('admin.expert');
    });
    Route::get('/brands', function () {
        return view('admin.brands');
    });

    Route::get('/jobs', function () {
        return view('admin.jobs');
    });


    Route::get('/Job_history', function () {
        return view('admin.job_history');
    });

    Route::get('/expert_points', function () {
        return view('admin.expert_points');
    });

    Route::get('/jobs', function () {
        return view('admin.jobs');
    });

    Route::get('/points', function () {
        return view('admin.points');
    });



    Route::any('/express_point', [App\Http\Controllers\ExpressController::class, 'express_point']);
    Route::get('/withdraw', [App\Http\Controllers\admincontroller::class, 'withdraw']);
    Route::any('/success/{id}', [App\Http\Controllers\admincontroller::class, 'success']);
    Route::any('/stripe/{id}', [App\Http\Controllers\StripePaymentController::class, 'admin_stripe']);

    Route::any('add_brand', [App\Http\Controllers\BrandController::class, 'create'])->name('brand');
    Route::any('edit_brand/{id}', [App\Http\Controllers\BrandController::class, 'edit'])->name('edit_brand');
    Route::any('delete_brand/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('delete_brand');

    Route::any('/priority_point', [App\Http\Controllers\ExpressController::class, 'priority_point']);

    Route::any('/expert_point', [App\Http\Controllers\ExpressController::class, 'expert_point']);



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
Route::post('stripe2', [App\Http\Controllers\StripePaymentController::class, 'stripePost2'])->name('stripe2.post2');






Route::any('admin_Approve/{id}', [App\Http\Controllers\ExpressController::class, 'admin_Approve']);


Route::any('admin_Turn_down/{id}', [App\Http\Controllers\ExpressController::class, 'admin_Turn_down']);




Route::middleware(['auth','Expert'])->group(function (){

        Route::get('/Jobs_detail', function () {
            return view('Jobs_detail');
        });



    });

    Route::get('/error', function () {
        return view('error');
    });



Route::get('/Detail_Product/{id}', [App\Http\Controllers\ExpressController::class, 'Detail_Product'])->name('Detail_Product');





