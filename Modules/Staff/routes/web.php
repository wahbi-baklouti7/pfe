<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\App\Http\Controllers\StaffController;

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
//Route::get('staff/detail', [StaffController::class, 'detail'])->name('staff.detail');

Route::group([], function () {
    //Route::resource('staff', StaffController::class)->names('staff');

});
