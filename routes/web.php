<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    echo 'About us';
});

Route::get('/main/{value}', [MainController::class, 'index']);
