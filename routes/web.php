<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\MerchantAuthController;
use App\Http\Controllers\ShopController;

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Merchant Routes
Route::prefix('merchant')->middleware('auth')->group(function () {
    Route::get('/store-list', [MerchantController::class, 'storeList'])->name('merchant.store-list');
    Route::get('/create-store', [MerchantController::class, 'createStore'])->name('merchant.create-store');
    Route::get('/category-list', [MerchantController::class, 'categoryList'])->name('merchant.category-list');
    Route::get('/create-category', [MerchantController::class, 'createCategory'])->name('merchant.create-category');
    Route::get('/product-list', [MerchantController::class, 'productList'])->name('merchant.product-list');
    Route::get('/create-product', [MerchantController::class, 'createProduct'])->name('merchant.create-product');
});

// Tenant Routes (Shop Page)
Route::domain('{shop}.localhost')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
});

// routes/web.php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// routes/web.php

Route::middleware('auth')->group(function () {
    Route::get('/merchant/dashboard', [MerchantController::class, 'dashboard'])->name('merchant.dashboard');
});
// routes/web.php
Route::get('merchant/dashboard', [MerchantController::class, 'dashboard'])->name('merchant.dashboard');
