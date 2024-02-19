<?php

namespace App\Providers;

use App\Models\Service;
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
        View::composer('layouts.app', function ($view) {
            $data = Service::get(); // Fetch data from the database or inject service
            $view->with('services', $data); // Pass data to the view
        });
    }
}
