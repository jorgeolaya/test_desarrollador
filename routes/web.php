<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomersController;

Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customers', [CustomersController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
