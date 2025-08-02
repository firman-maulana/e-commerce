<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // Bagian ini boleh kamu modifikasi untuk menu dinamis
        View::composer('layouts.navbar', function ($view) {
            $view->with('menuItems', [
                ['label' => 'Home', 'url' => '#home'],
                ['label' => 'Products', 'url' => '#products'],
                ['label' => 'About', 'url' => '#about'],
                ['label' => 'Contact', 'url' => '#contact'],
            ]);
        });
    }
}
