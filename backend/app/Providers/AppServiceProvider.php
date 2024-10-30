<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Sử dụng View Composer để chia sẻ $categories với menu.blade.php
        View::composer('user.partials.menu', function ($view) {
            $categories = Category::with('subCategories')->get();
            $view->with('categories', $categories);
        });
    }
}
