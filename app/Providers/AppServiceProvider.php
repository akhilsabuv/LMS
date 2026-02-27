<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        Paginator::useBootstrap();
        
        // Force HTTPS for production domain
        if (str_contains(request()->getHost(), 'lms.stockfordedu.com') || env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
