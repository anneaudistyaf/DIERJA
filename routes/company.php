<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;

Route::get('/login', [App\Http\Controllers\company\AuthCompanyController::class, 'Showlogin'])->name('login');
Route::get('/', function () {
    return redirect('/company/login');
});

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
});
