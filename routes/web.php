<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('shop');
});
Route::get('/',[MainController::class,'shop']);
Route::post('/insert', [MainController::class, 'insert'])->name('insert');
Route::get('/admin',[MainController::class,'admin']);
Route::get('/input',[MainController::class,'input']);
Route::post('/tambah',[sayur::class,'store']);
Route::get('/search', [MainController::class, 'search']);
Route::get('/admin', [MainController::class, 'admin'])->name('admin');
Route::post('/update/{id}', [MainController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [MainController::class, 'delete'])->name('delete');
