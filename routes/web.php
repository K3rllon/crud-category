<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorys', [CategorysController::class, "index"]);