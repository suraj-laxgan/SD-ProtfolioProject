<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrondEndDisplayController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrondEndDisplayController::class, 'index'])->name('insex');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/ws-profile/create', [ProfileController::class, 'wsCreate'])->name('wsprofile.create');
    Route::get('/ws-profile/list', [ProfileController::class, 'wsList'])->name('wsprofile.list');
    Route::post('/ws-profile/store', [ProfileController::class, 'wsStore'])->name('wsprofile.store');
    Route::get('/ws-profile/{email}', [ProfileController::class, 'wsEdit'])->name('wsprofile.edit');
    Route::patch('/ws-profile', [ProfileController::class, 'wsUpdate'])->name('wsprofile.update');
    Route::delete('/ws-profile', [ProfileController::class, 'wsDestroy'])->name('wsprofile.destroy');
});

require __DIR__.'/auth.php';
