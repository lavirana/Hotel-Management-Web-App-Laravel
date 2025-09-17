<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

Route::get('/',[AdminController::class, 'home']);
Route::get('/home',[AdminController::class, 'index'])->name('home');