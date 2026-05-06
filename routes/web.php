<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;

Route::get('/crud', [crudController::class, 'index']);
route::get('/crud/tambah', [crudController::class, 'tambah']);
Route::post('/crud/store', [crudController::class, 'store']);
route::post('/crud/update', [crudController::class, 'update']);
route::get('/crud/edit/{id}', [crudController::class, 'edit']);
route::get('/crud/hapus/{id}', [crudController::class, 'hapus']);