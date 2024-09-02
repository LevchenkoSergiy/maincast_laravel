<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testi', [TestController::class, 'index']);

Route::get('/test', function () {
    return 'Test Route 2';
});

