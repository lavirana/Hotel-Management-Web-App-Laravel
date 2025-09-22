<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

Route::get('/',[AdminController::class, 'home']);
Route::get('/home',[AdminController::class, 'index'])->name('home');
Route::get('/create_room',[AdminController::class, 'create_room'])->name('create_room');

Route::post('/add_room', [AdminController::class, 'add_room']);

Route::get('/all_rooms',[AdminController::class, 'all_rooms'])->name('all_rooms');