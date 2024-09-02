<?php

use Illuminate\Support\Facades\Route;
use Modules\demandeur\Profil\App\Http\Controllers\ProfilController;
use Modules\demandeur\Profil\App\Http\Controllers\loginController;
use Modules\demandeur\Profil\App\Http\Controllers\registerController;
use Modules\demandeur\Profil\App\Http\Controllers\forgotController;

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

//Route::get('annonce/babysitter', [AnnonceBabySitterController::class, 'index'])->name('annonce.babysitter');

Route::group([], function () {
    Route::resource('profil', ProfilController::class)->names('profil');
    //Route::get('register', [registerController::class, 'register'])->name('register');
    //Route::match(['get','post'],'register', [registerController::class, 'register'])->name('register');
   // Route::post('register', [registerController::class, 'store'])->name('register.store');

    //Route::get('login', [loginController::class, 'login'])->name('login');
   // Route::get('forgot', [forgotController::class, 'forgot'])->name('forgot');
});



