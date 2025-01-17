<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/home',function(){
    return redirect('/admin');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/layouts', [AdminController::class, 'index'])->name('layouts'); // List classes
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store'); // Create class
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create'); // Create form
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit'); // Edit form
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('admin.update'); // Update class
    Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete'); // Delete class
    Route::get('/kelas/{id}', [KelasController::class, 'viewClass'])->name('kelas.view');
});

// Grup rute untuk kelas
Route::group(['prefix' => 'kelas'], function () {
    Route::get('/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('/{id}/update', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/{id}/delete', [KelasController::class, 'delete'])->name('kelas.delete');

    // Route::get('murid/{id}', [MuridController::class,'viewDetail'])->name('kelas.view.detail');
});

Route::get('/kelas/{id}', [MuridController::class, 'viewDetailmrd'])->name('murid.view.detail');
Route::get('/view/{id}', [MuridController::class,'viewDetail'])->name('kelas.view.detail');
Route::get('/tambah-murid', [MuridController::class, 'create'])->name('tambah.murid');
Route::post('/store', [MuridController::class, 'store'])->name('murid.store');
route::get('/admin/siswa',[AdminController::class,'siswa']);

Route::group(['prefix' => 'guru', 'middleware' => 'auth'], function () {
    Route::get('/kelas/{id}', [GuruController::class, 'viewClass'])->name('guru.kelas.view'); // View class details for guru
    Route::get('/kelas/{kelasId}/murid/{muridId}/nilai/tambah', [GuruController::class, 'tambahNilai'])->name('guru.tambah.nilai');
    Route::post('/kelas/{kelasId}/murid/{muridId}/nilai/simpan', [GuruController::class, 'simpanNilai'])->name('guru.simpan.nilai');
});


Route::get('/logout',[LoginController::class, 'logout']);



