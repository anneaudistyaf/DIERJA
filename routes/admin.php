<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/admin/index');
});
Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
Route::get('/index', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'index'])->name('index');
Route::get('/tambahPelatihan', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'showAdd'])->name('show.add.pelatihan');
Route::post('/tambahPelatihan', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'add'])->name('add.pelatihan');
Route::get('/editPelatihan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'edit'])->name('edit.pelatihan');
Route::get('/updatePelatihan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'update'])->name('update.pelatihan');
Route::delete('/deletePelatihan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'delete'])->name('delete.pelatihan');
Route::group([
    'middleware' => [
        'auth:admin',
    ],
], function () {
});
