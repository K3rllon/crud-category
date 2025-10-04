<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorys', [CategorysController::class, "index"])->name("categorys.index");
Route::get('/categorys/create', [CategorysController::class, "create"])->name("categorys.create");
Route::post('/categorys', [CategorysController::class, "store"])->name("categorys.store");
Route::get('/categorys/{category}/edit', [CategorysController::class, "edit"])->name("categorys.edit");
Route::put('/categorys/{category}', [CategorysController::class, "update"])->name("categorys.update");
Route::delete('/categorys/{category}', [CategorysController::class, "destroy"])->name("categorys.destroy");