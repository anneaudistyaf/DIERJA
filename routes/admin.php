<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/admin/login');
});
Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.action');
Route::group([
    'middleware' => [
        'auth:admin',
    ],
], function () {
    Route::get('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::get('/index', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'index'])->name('index');
    Route::get('/tambahPelatihan', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'showAdd'])->name('show.add.pelatihan');
    Route::post('/tambahPelatihan', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'add'])->name('add.pelatihan');
    Route::get('/editPelatihan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'edit'])->name('edit.pelatihan');
    Route::get('/updatePelatihan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'update'])->name('update.pelatihan');
    Route::delete('/deletePelatihan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'delete'])->name('delete.pelatihan');
    # ROute for delete 
    Route::delete('/deleteSharing/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'deleteSharing'])->name('delete.sharing');
    Route::delete('/deleteJobs/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'deleteJobs'])->name('delete.job');
    Route::delete('/deleteUser/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'deleteUser'])->name('delete.user');
    Route::delete('/deletePerusahaan/{id}', [App\Http\Controllers\Admin\AdminPelatihanController::class, 'deletePerusahaan'])->name('delete.perusahan');
});
