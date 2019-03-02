<?php

namespace App\Providers;

use App\Model\Category;
use Illuminate\Support\ServiceProvider;
use View;

class NavbarServiceProvier extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view)
        {
            $category = Category::all();

            $view->with('categories', $category);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
