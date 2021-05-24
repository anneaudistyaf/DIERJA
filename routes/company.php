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
    Route::get('/formlowongan', [App\Http\Controllers\company\LowonganController::class, 'show'])->name('formlowongan');
    Route::post('/lowongan-perusahaan', [App\Http\Controllers\company\LowonganController::class, 'add'])->name('add.lowongan-perusahaan');
    Route::get('/editlowongan/{id}', [App\Http\Controllers\company\LowonganController::class, 'edit'])->name('editlowongan');
    Route::post('/updatelowongan/{id}', [App\Http\Controllers\company\LowonganController::class, 'update'])->name('updatelowongan');
    Route::delete('/deleteLowongan/{id}', [App\Http\Controllers\company\LowonganController::class, 'delete'])->name('deletelowongan');


    Route::get('/lamaran', [App\Http\Controllers\company\CompanynApplyController::class, 'index'])->name('lamaran.perusahaan');
    Route::get('/updateLamaran/{id}', [App\Http\Controllers\company\CompanynApplyController::class, 'update'])->name('update.lamaran.perusahaan');
});
Route::get('/lowongan-perusahaan', [App\Http\Controllers\company\LowonganController::class, 'index'])->name('lowongan-perusahaan');
Route::get('/detaillowongan/{id}', [App\Http\Controllers\company\LowonganController::class, 'detail'])->name('detaillowongan');
