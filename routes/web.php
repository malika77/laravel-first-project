<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/Register', [UserController::class,'registrationView'])->name('register-view');

Route::post('/user-registration', [UserController::class,'userRegister'])->name('user-register');


