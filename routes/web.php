<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;



Route::get('/', function () {
    return view('home');
});

Route::get('/register/user', [userController::class, 'createUser']);
