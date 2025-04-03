<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});


Route::post('/create-user',  [UserController::class, 'createUser']);
Route::post('/login-user',  [UserController::class, 'userLogin']);