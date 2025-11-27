<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Http\Controllers\PedidosController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/login', [authController::class, 'login']);

Route::post('/authenticar', [authController::class, 'authenticar'])->name('authenticar');

Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/dashboard', [authController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [userController::class, 'userProfile'])->name('profile');
    Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
    ///pedidos
});





