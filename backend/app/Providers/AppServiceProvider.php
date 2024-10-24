<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Sử dụng View Composer để chia sẻ $categories với menu.blade.php
        View::composer('user.partials.menu', function ($view) {
            $categories = Category::with('subCategories')->get();
            $view->with('categories', $categories);
        });
    }
}
