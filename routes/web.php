<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

route::get('/',[LoginController::class, 'index']) -> name ('login');
route::post('/',[LoginController::class, 'login']);


Route::get('/home',function(){
    return redirect('/admin');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/layouts', [AdminController::class, 'index'])->name('layouts'); // List classes
    Route::post('/store', [AdminController::class, 'store'])->name('kelas.store'); // Create class
    Route::get('/create', [AdminController::class, 'create'])->name('kelas.create'); // Create form
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('kelas.edit'); // Edit form
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('kelas.update'); // Update class
    Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('kelas.delete'); // Delete class
});


route::get('/admin/siswa',[AdminController::class,'siswa']);
Route::get('/logout',[LoginController::class, 'logout']);


// Route::resource('kelas', AdminController::class);
