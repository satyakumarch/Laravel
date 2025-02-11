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
        // Sharing data across all views
        View::share('point', 0);
        View::share('name', 'Anil');
        View::share('name2', 'Shuvam');
        View::share('name', 'Aryan'); // This will override 'Anil'
    } // <-- Corrected closing of the boot() function
}
