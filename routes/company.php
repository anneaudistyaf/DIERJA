<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;

Route::get('/', function () {
    return redirect('/company/login');
});
Route::get('/login', [App\Http\Controllers\company\AuthCompanyController::class, 'Showlogin'])->name('login');
Route::post('/login', [App\Http\Controllers\company\AuthCompanyController::class, 'login'])->name('loginAction');

Route::get('/register', [App\Http\Controllers\company\AuthCompanyController::class, 'Showlogin']);
Route::post('/register', [App\Http\Controllers\company\AuthCompanyController::class, 'register'])->name('register');

Route::group([
    'middleware' => [
        'auth:company',
    ],
], function () {
    Route::get('/logout', [App\Http\Controllers\company\AuthCompanyController::class, 'logout'])->name('logout');
    Route::get('/index', [App\Http\Controllers\company\CompanyController::class, 'index'])->name('index');
    Route::get('/profile-perusahaan/{id}', [App\Http\Controllers\company\CompanyProfileController::class, 'index'])->name('profile-perusahaan');
    Route::get('/edit-perusahaan/{id}', [App\Http\Controllers\company\CompanyProfileController::class, 'edit'])->name('edit-perusahaan');
    Route::post('/update-perusahaan/{id}', [App\Http\Controllers\company\CompanyProfileController::class, 'update'])->name('update-perusahaan');
    Route::view('/lowongan-perusahaan', 'lowongan-perusahaan')->name('lowongan-perusahaan');
});
