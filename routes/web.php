<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\StoreController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

// Public Routes

Route::get('/', [IndexController::class, 'index'])->name('home');

// Sell products
Route::get('/sell-product', [IndexController::class, 'sellProduct'])->name('sell.products');
Route::get('/sell-apply', [IndexController::class, 'sellApply'])->name('sell.apply')->middleware('auth');

// Stores
Route::get('/all-stores', [IndexController::class, 'allStores'])->name('stores');
Route::get('/all-stores/{store}', [IndexController::class, 'storePage'])->name('show-store');

// Authentications
Route::get('/sign-up', [AuthController::class, 'getRegister'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/users', [AuthController::class, 'store'])->name('user.create');
Route::post('/user-authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix("admin")->group(function () {
    // Admin Stores
    Route::resource('/stores', StoreController::class)->middleware('auth');
});
