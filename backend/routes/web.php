<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\view\DonHangController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Đăng ký
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Đăng nhập
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Quên mật khẩu
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

// Danh sách sản phẩm
Route::get('products', [ApiProductController::class, 'index']);
Route::get('products/hot', [ApiProductController::class, 'hotProducts']);
Route::get('products/sale', [ApiProductController::class, 'saleProducts']);
Route::get('products/{id}', [ApiProductController::class, 'show']);
Route::get('products/filter', [ApiProductController::class, 'filter']);

Route::get('/', function () {
    return view('welcome');
});

// Danh sách người dùng
Route::prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/subcategories/{subCategory}', [UserController::class, 'showSubCategories'])->name('subcategories');
        Route::get('/filter', [UserController::class, 'filter'])->name('filter');
        Route::get('/products/{id}', [UserController::class, 'show'])->name('products.show');
    });

// Routes for Category and Subcategory
Route::resource('admin/pages/categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);

// Admin routes for product and attribute management
Route::prefix('admins')
    ->as('admins.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.pages.dashboard');
        });

        Route::prefix('products')
            ->as('products.')
            ->group(function () {
                Route::get('/', [ProductController::class, 'index'])->name('index');
                Route::get('/create', [ProductController::class, 'create'])->name('create');
                Route::post('/store', [ProductController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
                Route::put('/{id}/update', [ProductController::class, 'update'])->name('update');
                Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('destroy');
                Route::get('/{id}', [ProductController::class, 'show'])->name('show');
            });

        Route::prefix('chips')
            ->as('chips.')
            ->group(function () {
                Route::get('/', [ChipController::class, 'index'])->name('index');
                Route::get('/create', [ChipController::class, 'create'])->name('create');
                Route::post('/store', [ChipController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [ChipController::class, 'edit'])->name('edit');
                Route::put('/{id}/update', [ChipController::class, 'update'])->name('update');
                Route::delete('/{id}/destroy', [ChipController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('rams')
            ->as('rams.')
            ->group(function () {
                Route::get('/', [RamController::class, 'index'])->name('index');
                Route::get('/create', [RamController::class, 'create'])->name('create');
                Route::post('/store', [RamController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [RamController::class, 'edit'])->name('edit');
                Route::put('/{id}/update', [RamController::class, 'update'])->name('update');
                Route::delete('/{id}/destroy', [RamController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('storages')
            ->as('storages.')
            ->group(function () {
                Route::get('/', [StorageController::class, 'index'])->name('index');
                Route::get('/create', [StorageController::class, 'create'])->name('create');
                Route::post('/store', [StorageController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [StorageController::class, 'edit'])->name('edit');
                Route::put('/{id}/update', [StorageController::class, 'update'])->name('update');
                Route::delete('/{id}/destroy', [StorageController::class, 'destroy'])->name('destroy');
            });
    });

// Promotions resource
Route::resource('promotions', PromotionController::class);

// Cart routes
Route::prefix('cart')
    ->as('cart.')
    ->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::get('/create', [CartController::class, 'create'])->name('create');
        Route::post('/store', [CartController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CartController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [CartController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [CartController::class, 'destroy'])->name('destroy');
        Route::get('/myorder', [DonHangController::class, 'index'])->name('myorder');
    });

// Checkout routes
Route::get('/checkout', function () {
    return view('user.pages.checkout'); // Đường dẫn đến view checkout của bạn
})->name('checkout');

Route::post('/checkout/place', [OrderController::class, 'placeOrder'])->name('checkout.place');

// Order detail route
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.detail');

// Momo payment route
Route::post('/momo_payment', [OrderController::class, 'momo_payment'])->name('momo.payment');
