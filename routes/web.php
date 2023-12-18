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

Route::get('users', [UserController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('users');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {

    Route::get('users', [UserController::class, 'index'])
        ->middleware(['auth', 'role:admin'])
        ->name('users');

    Volt::route('user', 'pages.users.view')
        ->middleware(['auth', 'role:admin'])
        ->name('user');
});

// Volt::route('dashboard', 'pages.dashboard.welcome-note')
//     ->name('welcome.note');

// Route::middleware(['auth', 'verified'])->group(function () {

//     Volt::route('dashboard', 'pages.dashboard.welcome-note')
//         ->name('welcome.note');

// });

// Route::prefix('/trashed')->name('trashed.')->middleware('auth')->group(function(){
//     Route::get('/', [TrashedNoteController::class, 'index'])->name('index');
//     Route::get('/{note}', [TrashedNoteController::class, 'show'])->name('show')->withTrashed();
//     Route::put('/{note}', [TrashedNoteController::class, 'update'])->name('update')->withTrashed();
//     Route::delete('/{note}', [TrashedNoteController::class, 'destroy'])->name('destroy')->withTrashed();
// });

require __DIR__ . '/auth.php';
