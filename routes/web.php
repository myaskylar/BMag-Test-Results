<?php

use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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

Route::view('/', 'main');

Route::get('results', [ResultController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('results');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Volt::route('users', 'pages.users.index')
        ->name('users');

    Volt::route('user/{user}', 'pages.users.view')
        ->name('user');
});

require __DIR__ . '/auth.php';
