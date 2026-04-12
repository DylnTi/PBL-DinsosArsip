<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\AuthController;


Route::get('/edit-profile', function () {
    return inertia('settings/EditProfil', [
        'title' => 'Edit Profil'
    ]);
});

Route::post('/register', [AuthController::class, 'register']);
// LOGIN
Route::get('/login', function () {
    return inertia('Login', [
        'status' => session('status'),
    ]);
});

// REGISTER 
Route::get('/register', function () {
    return inertia('Register');
});

Route::inertia('/', 'Landing', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::inertia('dashboard', 'Dashboard', [
        'title' => 'Beranda'
    ])->name('dashboard');

    Route::inertia('arsip', 'ListArsip', [
        'title' => 'Daftar Arsip'
    ])->name('arsip');

});

require __DIR__.'/settings.php';
