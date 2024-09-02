<?php

use Illuminate\Support\Facades\Route;
use Modules\prestataire\Staff\App\Http\Controllers\StaffController;
use Modules\prestataire\Staff\App\Http\Controllers\StaffDetailController;

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

Route::get('staff/detail', [StaffDetailController::class, 'index'])->name('staff.detail');


Route::group([], function () {
    Route::resource('staff', StaffController::class)->names('staff');
});
