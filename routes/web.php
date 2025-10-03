<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorys', [CategorysController::class, "index"])->name("categorys.index");
Route::get('/categorys/create', [CategorysController::class, "create"])->name("categorys.create");
Route::post('/categorys', [CategorysController::class, "store"])->name("categorys.store");