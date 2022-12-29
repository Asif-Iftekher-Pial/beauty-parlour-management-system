<?php

use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\frontend\AutheticationController;
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


// Frontend Routes 

Route::get('/',[AutheticationController::class,'home'])->name('home');

Route::get('/about',[AutheticationController::class,'about'])->name('aboutus');
Route::get('/all-services',[AutheticationController::class,'allServices'])->name('allServices');
Route::get('/login-client',[AutheticationController::class,'loginPage'])->name('loginPage');
Route::get('/client-register',[AutheticationController::class,'regPage'])->name('regPage');

Route::post('/login-client-submit',[AutheticationController::class,'clientSubmitLogin'])->name('loginSubmit');
Route::post('/client-register-submit',[AutheticationController::class,'regSubmit'])->name('regSubmit');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/client-logout',[AutheticationController::class,'clientLogout'])->name('clientLogout');


});
















//............................. Backend Routes ..............................
// login
Route::get('/login',[AuthController::class,'login'])->name('admin.login');
Route::post('/submit-login', [AuthController::class, 'submitLogin'])->name('submitLogin');


Route::group(['prefix' =>'admin','middleware'=>'admin'],function(){
    Route::get('/admin-logout',[AuthController::class,'adminLogout'])->name('adminLogout');

    Route::get('/',[AuthController::class,'home'])->name('dashboard');
    Route::get('/profile',[AuthController::class,'profile'])->name('profile');
    Route::put('/profile-update',[AuthController::class,'profileUpdate'])->name('profileUpdate');
    Route::put('/profile-update-image',[AuthController::class,'profileUpdateImage'])->name('profileUpdateImage');
    

    // service list
    Route::resource('/services',ServiceController::class);

    // aboutus list
    Route::resource('/about-us',AboutUsController::class);
    Route::get('/advertise',[AboutUsController::class,'advertise'])->name('advertise');
    Route::post('/create-advertise',[AboutUsController::class,'CreateAdvertise'])->name('CreateAdvertise');
    Route::get('/edit-advertise/{id}',[AboutUsController::class,'editAdvertise'])->name('editAdvertise');
    Route::put('/update-advertise/{id}',[AboutUsController::class,'UpdateAdvertise'])->name('UpdateAdvertise');
    Route::get('/delete-advertise/{id}',[AboutUsController::class,'deleteAdvertise'])->name('deleteAdvertise');
});
