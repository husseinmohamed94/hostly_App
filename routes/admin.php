<?php

use App\Http\Controllers\EnjoyFeatureController;
use App\Http\Controllers\FrequentlyAskedController;
use App\Http\Controllers\OrderPaymentController;
use App\Http\Controllers\OurCostumerController;
use App\Http\Controllers\OurDomainController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SlideShowController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebHostingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::group([
    'middleware' => ['auth','IsAdmin'],
    'prefix' => 'admin'
], function () {

    Route::resource('slide',SlideShowController::class);
    Route::resource('Setting',SettingController::class);
    Route::resource('OurService',OurServiceController::class);
    Route::resource('webhosting',WebHostingController::class);
    Route::resource('costumer',OurCostumerController::class);
    Route::resource('Domain',OurDomainController::class);
    Route::resource('Features',EnjoyFeatureController::class);
    Route::resource('Asked',FrequentlyAskedController::class);
    Route::resource('users',UserController::class);
    Route::post('user/admin/{id}', [UserController::class, 'admin'])->name('user.admin');
    Route::resource('OrderPayment',OrderPaymentController::class);


});
