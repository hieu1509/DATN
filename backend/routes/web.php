<?php


use App\Http\Controllers\api\ApiauthController;
use App\Http\Controllers\Auth\User\UserForgotPasswordController;
use App\Http\Controllers\Auth\User\UserRegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Auth\Admin\ForgotPasswordController;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\RegisterController;
use App\Http\Controllers\Auth\User\UserLoginController;
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

//Đăng ký, đăng nhập Admin
Route::prefix('admin')->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('admin.password.update');
});



// Đăng ký người dùng
Route::get('register', [UserRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserRegisterController::class, 'register']);
// Đăng nhập người dùng
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserLoginController::class, 'login']);
Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');
// Khôi phục mật khẩu
Route::get('forgot-password', [UserForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [UserForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [UserForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [UserForgotPasswordController::class, 'resetPassword'])->name('password.update');


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
Route::resource('promotions', PromotionController::class);
