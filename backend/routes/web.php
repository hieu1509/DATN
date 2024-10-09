<?php

<<<<<<< Updated upstream
use App\Http\Controllers\api\ApiauthController;
=======
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubcategoryController;
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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< Updated upstream
=======

Route::resource('admin/pages/categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);

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
>>>>>>> Stashed changes
