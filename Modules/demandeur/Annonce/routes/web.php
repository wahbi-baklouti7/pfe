<?php

use Illuminate\Support\Facades\Route;
use Modules\demandeur\Annonce\App\Http\Controllers\AnnonceController;
use Modules\demandeur\Annonce\App\Http\Controllers\AnnonceBabySitterController;

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

Route::get('annonce/babysitter', [AnnonceBabySitterController::class, 'index'])->name('annonce.babysitter');

Route::group([], function () {
    Route::resource('annonce', AnnonceController::class)->names('annonce');
});




