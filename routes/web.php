<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\welcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgetPasswordManagerController;

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

// Route::middleware(['auth'])->group(function(){

 // Welcome

// Route::get('/', [welcomeController::class, 'index']);

// customer

// Dashboard



Route::get('/', [DashboardController::class, 'index'])->middleware('UserAkses');
Route::get('/admin', [DashboardController::class, 'index']);

// Owner
Route::get('/owner', [AdminController::class, 'index']);
Route::get('owner/create', [AdminController::class, 'usercreate']);
Route::post('owner', [AdminController::class, 'userstore']);
Route::get('owner/{id}/edit', [AdminController::class, 'useredit']);
Route::patch('owner/{id}', [AdminController::class, 'userupdate']);
Route::delete('owner/{id}', [AdminController::class, 'userdestroy']);

Route::get('customer', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customer/create', [CustomerController::class, 'create']);
Route::post('customer', [CustomerController::class, 'store']);
Route::delete('customer/{id}', [CustomerController::class, 'destroy']);
Route::get('customer/{id}/edit', [CustomerController::class, 'edit']);
Route::patch('customer/{id}', [CustomerController::class, 'update']);
Route::get('customer/export/excel', [CustomerController::class, 'export_excel']);
// Route::post('customer', [CustomerController::class, 'import_excel']);
Route::get('customer/tabel', [CustomerController::class, 'tabel']); //debug tabel


// order

Route::get('orders', [OrdersController::class, 'index'])->name('orders.index');
Route::get('orders/export/excel', [OrdersController::class, 'export_excel']);
Route::get('orders/create', [OrdersController::class, 'create']);
Route::post('orders', [OrdersController::class, 'store']);
Route::get('orders/{id}', [OrdersController::class, 'show']);
Route::delete('orders/{id}', [OrdersController::class, 'destroy']);
Route::get('orders/{id}/edit', [OrdersController::class, 'edit']);
Route::put('orders/{id}', [OrdersController::class, 'update'])->name('orders.update');
Route::get('orders/tabel/debug', [OrdersController::class, 'tabel']); //debug tabel

// Item

Route::get('items/{id}', [ItemController::class, 'index'])->name('items.index');
Route::get('items/create/{id}', [ItemController::class, 'create'])->name('items.create');
Route::post('items/{id}', [ItemController::class, 'store'])->name('items.store');
Route::get('items/show/{id}', [ItemController::class, 'show'])->name('items.show');
Route::delete('items/{id}/{id_order}', [ItemController::class, 'destroy']);
Route::get('items/edit/{id}/{id_order}', [ItemController::class, 'edit'])->name('items.edit');
Route::put('items/update/{id}/{id_order}', [ItemController::class, 'update'])->name('items.update');

// Dashboard

// Admin


// });

// Route::middleware(['guest'])->group(function(){

// Authentication

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);

// ForgotPassword

Route::get('forgetpassword', [ForgetPasswordManagerController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('forgetpassword', [ForgetPasswordManagerController::class, 'forgetpasswordPost'])->name('forgetpasswordPost');
Route::get("resetpassword/{token}", [ForgetPasswordManagerController::class, 'resetpassword'])->name('resetpassword');
Route::post('resetpassword', [ForgetPasswordManagerController::class, 'resetpasswordPost'])->name('resetpasswordPost');

// });