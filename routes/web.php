<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

route::get('/',[LoginController::class, 'index']) -> name ('login');
route::post('/',[LoginController::class, 'login']);


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
    Route::get('/admin/kelas/{id}', [KelasController::class, 'viewClass'])->name('kelas.view');
});

Route::group(['prefix' => 'kelas'], function () {
    Route::get('/admin/kelas/{id}/create', [KelasController::class, 'createStudent'])->name('murid.create');
    Route::post('/admin/kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::get('/admin/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('/admin/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/admin/kelas/{id}', [KelasController::class, 'delete'])->name('kelas.delete');
    // Route::get('/admin/kelas/{id}', [KelasController::class, 'view'])->name('kelas.view');
});


route::get('/admin/siswa',[AdminController::class,'siswa']);
Route::get('/logout',[LoginController::class, 'logout']);


// Route::resource('kelas', AdminController::class);
