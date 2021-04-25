<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('homepage');
});
*/

// Route::view('/{path?}', 'test');
Route::view('/test', 'test');
Route::view('/', 'homepage')->name('homepage');
Route::view('/signup', 'signup')->name('signup');
Route::view('/lowongan', 'lowongan')->name('lowongan');
Route::view('/detaillowongan', 'detaillowongan')->name('detaillowongan');
Route::view('/pelatihan', 'pelatihan')->name('pelatihan');
Route::view('/detailpelatihan', 'detailpelatihan')->name('detailpelatihan');
Route::view('/sharing', 'sharing')->name('sharing');
Route::view('/profile', 'profile')->name('profile');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerAction'])->name('register');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginAction'])->name('login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
