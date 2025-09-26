<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\contactsController;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register',[AuthController::class,'showRegister'])->name('register');
Route::post('register',[AuthController::class,'register']);

Route::get('login',[AuthController::class,'showLogin'])->name('login');
Route::post('login',[AuthController::class,'login']);

Route::middleware('auth')->group(function(){
    Route::resource('contacts', contactsController::class);
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});