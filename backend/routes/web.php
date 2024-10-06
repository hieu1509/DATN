<?php

use App\Http\Controllers\api\ApiauthController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\RamController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admins')
    ->as('admins.')
    ->group(function () {
        Route::get('/', function(){
            return view('admins.dashboard');
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
    });

