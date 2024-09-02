<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//<a href="{{ route('toggle.view') }}" class="dropdown-item ai-icon"> put in the main_page.blade.php


Route::get('/annonce/profil', [profilController::class, 'show'])->name('annonce.profil');
Route::get('/staff/view', [staffController::class, 'show'])->name('staff.view');

// Route to toggle between the views
Route::get('/toggle-view', function () {
    $lastView = session('last_view', 'module1.view'); // Default to module1.view if not set

    // Toggle the view
    $nextView = $lastView === 'module1.view' ? 'module2.view' : 'module1.view';

    // Store the next view in the session
    session(['last_view' => $nextView]);

    // Redirect to the next view
    return redirect()->route($nextView);
})->name('toggle.view');






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
