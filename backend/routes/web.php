<?php

use App\Http\Controllers\AdminController;
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
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\view\DonHangController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DonHangController as ControllersDonHangController;
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

/// Đăng ký admin
Route::get('register/admin', [RegisterController::class, 'showAdminRegistrationForm'])->name('register.admin');
Route::post('register/admin', [RegisterController::class, 'registerAdmin'])->name('register.admin.post');

Route::get('register/user', [RegisterController::class, 'showUserRegistrationForm'])->name('register.user');
Route::post('register/user', [RegisterController::class, 'registerUser'])->name('register.user.post');
//Đăng nhập
Route::get('login/admin', [LoginController::class, 'showAdminLoginForm'])->name('login.admin');
Route::post('login/admin', [LoginController::class, 'adminLogin'])->name('login.admin.post');

Route::get('login/user', [LoginController::class, 'showUserLoginForm'])->name('login.user');
Route::post('login/user', [LoginController::class, 'userLogin'])->name('login.user.post');
Route::post('admin/logout', [LoginController::class, 'adminLogout'])->name('logout.admin');
Route::post('user/logout', [LoginController::class, 'userLogout'])->name('logout.user');

// Hiển thị form yêu cầu quên mật khẩu
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Gửi email đặt lại mật khẩu
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Hiển thị form đặt lại mật khẩu
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Xử lý đặt lại mật khẩu
Route::post('reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
// Các route yêu cầu quyền admin
Route::group(['middleware' => ['admin']], function () {
    Route::get('admins', [AdminController::class, 'index'])->name('admins');
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users'); // Quản lý người dùng
});

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

// Routes for Category and Subcategory (admin)
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

            Route::prefix('orders')
            ->as('orders.')
            ->group(function () {
                Route::get('/', [ControllersDonHangController::class, 'index'])->name('index');
                Route::get('/create', [ControllersDonHangController::class, 'create'])->name('create');
                Route::post('/store', [ControllersDonHangController::class, 'store'])->name('store');
                Route::get('/show/{id}', [ControllersDonHangController::class, 'show'])->name('show');
                Route::get('/{id}/edit', [ControllersDonHangController::class, 'edit'])->name('edit');
                Route::put('/{id}/update', [ControllersDonHangController::class, 'update'])->name('update');
                Route::delete('/{id}/destroy', [ControllersDonHangController::class, 'destroy'])->name('destroy');
            });
    });

    

// Promotions resource (admin)
Route::resource('promotions', PromotionController::class);

// Cart routes (user)
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

// Hiển thị trang checkout
// Route::get('/checkout', function () {
//     return view('user.pages.checkout'); // Đường dẫn đến view checkout của bạn
// })->name('checkout');



// user
// Route để hiển thị trang thanh toán
Route::post('/cart/checkout', [OrderController::class, 'checkout'])->name('cart.checkout');

// Xử lý đặt hàng và thanh toán (phương thức POST)
Route::post('/checkout/place', [OrderController::class, 'placeOrder'])->name('checkout.place');

// Trang thành công sau khi thanh toán
Route::get('/order/success/{id}', [OrderController::class, 'success'])->name('order.success');

// IPN của MoMo
Route::post('/momo/ipn', [OrderController::class, 'ipn'])->name('order.ipn');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');