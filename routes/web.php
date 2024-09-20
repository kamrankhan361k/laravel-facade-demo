<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\CustomController;

Route::get('/greet/{name}', [CustomController::class, 'greet']);
