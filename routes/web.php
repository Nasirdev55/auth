<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('user')->group(function (){

//    Authentication Routes

    Route::middleware('guest')->group(function () {

        Route::get('/register',[\App\Http\Controllers\Auth\AuthenticationController::class,'registerPage'])->name('registerPage');
        Route::post('/registered',[\App\Http\Controllers\Auth\AuthenticationController::class,'registered'])->name('registered');
        Route::get('/login',[\App\Http\Controllers\Auth\AuthenticationController::class,'loginPage'])->name('loginPage');
        Route::post('/dologin',[\App\Http\Controllers\Auth\AuthenticationController::class,'doLogin'])->name('doLogin');

    });
    Route::get('/dashboard',[\App\Http\Controllers\Auth\AuthenticationController::class,'dashBoard'])->name('dashBoard');
    Route::post('/logout',[\App\Http\Controllers\Auth\AuthenticationController::class,'logout'])->name('logout');



});


