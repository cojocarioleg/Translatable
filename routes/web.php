<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowCategoryController;
use App\Http\Controllers\ShowProductController;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/products', ProductController::class);
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{locale}', [HomeController::class, 'changeLocale'])->name('changeLocale');
Route::get('/product/{product}', [ShowProductController::class, 'index'])->name('showProduct');
Route::get('/categories', [ShowCategoryController::class, 'showCategories'])->name('showCategories');
Route::get('/category/{category}', [ShowCategoryController::class, 'showCategory'])->name('showCategory');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add/{id}', [CartController::class, 'cart_add'])->name('cart_add');
Route::post('/cart/remove/{id}', [CartController::class, 'cart_remove'])->name('cart_remove');

Route::get('/cart/confirmOrderView', [CartController::class, 'confirmOrderView'])->name('confirmOrderView');
Route::post('/cart/confirmOrder', [CartController::class, 'confirmOrder'])->name('confirmOrder');
