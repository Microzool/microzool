<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/{page}', [App\Http\Controllers\AdminController::class, 'index'] );
