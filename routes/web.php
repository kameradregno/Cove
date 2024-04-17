<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// customer

Route::get('customer', [CustomerController::class, 'index']);

Route::get('customer/create', [CustomerController::class, 'create']);

Route::post('customer', [CustomerController::class, 'store']);

Route::delete('customer/{id}', [CustomerController::class, 'destroy']);

Route::get('customer/{id}/edit', [CustomerController::class, 'edit']);

Route::patch('customer/{id}', [CustomerController::class, 'update']);

// order

// Route::get('order', [OrderController::class, 'index']);

// Route::get('order/create', [OrderController::class, 'create']);

// Route::post('order', [OrderController::class, 'store']);

// Route::delete('order/{id}', [OrderController::class, 'destroy']);

// Route::get('order/{id}/edit', [OrderController::class, 'edit']);

// Route::patch('order/{id}', [OrderController::class, 'update']);

// Pesanan




// Route::get('dashboard', [DashboardController::class, 'index']);

