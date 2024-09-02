<?php

use Illuminate\Support\Facades\Route;
use Modules\demandeur\Annonce\App\Http\Controllers\AnnonceController;
use Modules\demandeur\Annonce\App\Http\Controllers\AnnonceBabySitterController;
use Modules\demandeur\Annonce\App\Http\Controllers\AnnonceAVSController;
use Modules\demandeur\Annonce\App\Http\Controllers\AnnonceAnimauxController;

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

Route::get('annonce/babysitter', [AnnonceBabySitterController::class, 'create'])->name('annonce.babysitter');

Route::get('annonce/AVS', [AnnonceAVSController::class, 'create'])->name('annonce.AVS');

Route::get('annonce/animaux', [AnnonceAnimauxcontroller::class, 'create'])->name('annonce.animaux');

Route::group([], function () {
    Route::resource('annonce', AnnonceController::class)->names('annonce');
});




