<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan semua tamu
Route::get('/guests', [GuestController::class, 'index']);

// Menampilkan formulir tambah tamu
Route::get('/guests/create', [GuestController::class, 'create']);

// Menyimpan tamu baru
Route::post('/guests', [GuestController::class, 'store']);

// Menampilkan detail tamu
Route::get('/guests/{guest}', [GuestController::class, 'show']);

// Menampilkan formulir edit tamu
Route::get('/guests/{guest}/edit', [GuestController::class, 'edit']);

// Menyimpan perubahan pada tamu
Route::put('/guests/{guest}', [GuestController::class, 'update']);

// Menghapus tamu
Route::delete('/guests/{guest}', [GuestController::class, 'destroy']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
