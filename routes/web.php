<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IPRController;  // Add IPRController import
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------- 
| Web Routes 
|---------------------------------------------------------------------- 
| 
| Here is where you can register web routes for your application. 
| These routes are loaded by the RouteServiceProvider and all of them 
| will be assigned to the "web" middleware group. Make something great! 
|
*/

// Home route
Route::get('/', function () {
    return view('home');
});

// Dashboard route with IPR record count
Route::get('/dashboard', function () {
    $iprsCount = auth()->user()->iprs->count();  // Get user's IPR record count
    return view('dashboard', compact('iprsCount'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Authentication routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Add IPRController routes
    Route::resource('iprs', IPRController::class);  // Add routes for IPR management
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


require __DIR__.'/auth.php'; 
