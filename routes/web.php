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
// Route::view('/signup', 'signup')->name('signup');
Route::view('/lowongan', 'lowongan')->name('lowongan');
Route::view('/detaillowongan', 'detaillowongan')->name('detaillowongan');
Route::view('/pelatihan', 'pelatihan')->name('pelatihan');
Route::view('/detailpelatihan', 'detailpelatihan')->name('detailpelatihan');
Route::group(['middleware' => 'auth:web'], function () {
    Route::post('/post.user', [App\Http\Controllers\User\UserPost::class, 'post'])->name('user.post');
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::prefix('profile')->group(function () {
        Route::get('/{id}', [App\Http\Controllers\User\UserProfile::class, 'index'])->name('profile');
        Route::get('/edit-user/{id}', [App\Http\Controllers\User\UserProfile::class, 'edit']);
        Route::post('/update-user/{id}', [App\Http\Controllers\User\UserProfile::class, 'Update'])->name('update.user');
        Route::get('/edit-cv/{id}', [App\Http\Controllers\User\UserCvController::class, 'edit'])->name('edit.cv');
        Route::post('/add-cv', [App\Http\Controllers\User\UserCvController::class, 'add'])->name('add.cv');
    });
});
Route::get('/sharing', [\App\Http\Controllers\SharingController::class, 'index'])->name('sharing');


Route::get('/abcd', [App\Http\Controllers\AuthController::class, 'index']);
Route::view('/lamaran', 'lamaran')->name('lamaran');
Route::view('/formlowongan', 'formlowongan')->name('formlowongan');
// Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::view('/edit-perusahaan', 'edit-perusahaan')->name('edit-perusahaan');

Route::view('/admin', 'admin')->name('admin');
Route::view('/tambah-pelatihan', 'tambah-pelatihan')->name('tambah-pelatihan');

Route::prefix('User')->group(function () {
    Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerAction'])->name('register');
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginAction'])->name('login');
});
