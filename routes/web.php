<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;



Route::get('/', function () {
    return view('home');
});

Route::get('/register/user', [userController::class, 'createUser'])->name('create.user');
Route::post('/register/user', [userController::class, 'storeUser'])->name('store.user');
