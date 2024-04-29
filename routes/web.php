<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ItemController;

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

Route::get('orders', [OrdersController::class, 'index']);

Route::get('orders/create', [OrdersController::class, 'create']);

Route::post('orders', [OrdersController::class, 'store']);

Route::get('orders/{id}', [OrdersController::class, 'show']);

Route::delete('orders/{id}', [OrdersController::class, 'destroy']);

Route::get('orders/{id}/edit', [OrdersController::class, 'edit']);

Route::put('orders/{id}', [OrdersController::class, 'update'])->name('orders.update');

// Item

Route::get('items/create', [ItemController::class, 'create']);
Route::post('items', [ItemController::class, 'items'])->name('items'); 

// Dashboard

Route::get('dashboard', [DashboardController::class, 'index']);

