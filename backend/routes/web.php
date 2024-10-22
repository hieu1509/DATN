<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\api\ApiauthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

// Đăng ký admin
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


// Danh sách sản phẩm
Route::get('products', [ApiProductController::class, 'index']);
// Danh sách sản phẩm hot
Route::get('products/hot', [ApiProductController::class, 'hotProducts']);
// Danh sách sản phẩm đang sale
Route::get('products/sale', [ApiProductController::class, 'saleProducts']);
// Chi tiết sản phẩm
Route::get('products/{id}', [ApiProductController::class, 'show']);
// Lọc sản phẩm
Route::get('products/filter', [ApiProductController::class, 'filter']);

Route::get('/', function () {
    return view('welcome');
});


// Danh sách danh mục
Route::resource('admin/pages/categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);


//Danh sách thuộc tính
Route::prefix('admins')
    ->as('admins.')
    ->group(function () {
        Route::get('/', function(){
            return view('admin.pages.dashboard');
        });

        Route::prefix('products')
        ->as('products.')
        ->group(function() {
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
        ->group(function(){
            Route::get('/', [ChipController::class, 'index'])->name('index');

            Route::get('/create', [ChipController::class, 'create'])->name('create');
            Route::post('/store', [ChipController::class, 'store'])->name('store');

            Route::get('/{id}/edit', [ChipController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [ChipController::class, 'update'])->name('update');

            Route::delete('/{id}/destroy', [ChipController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('rams')
        ->as('rams.')
        ->group(function(){
            Route::get('/', [RamController::class, 'index'])->name('index');

            Route::get('/create', [RamController::class, 'create'])->name('create');
            Route::post('/store', [RamController::class, 'store'])->name('store');

            Route::get('/{id}/edit', [RamController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [RamController::class, 'update'])->name('update');

            Route::delete('/{id}/destroy', [RamController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('storages')
        ->as('storages.')
        ->group(function(){
            Route::get('/', [StorageController::class, 'index'])->name('index');

            Route::get('/create', [StorageController::class, 'create'])->name('create');
            Route::post('/store', [StorageController::class, 'store'])->name('store');

            Route::get('/{id}/edit', [StorageController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [StorageController::class, 'update'])->name('update');

            Route::delete('/{id}/destroy', [StorageController::class, 'destroy'])->name('destroy');
        });
    });

    Route::resource('promotions', PromotionController::class);



    //
    Route::get('/test', function () {
        return view('user/pages/cart');
    });

    Route::resource('promotions', PromotionController::class);
