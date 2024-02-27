<?php

namespace App\Providers;

use App\Models\CustomPage;
use App\Models\Service;
use App\Models\Setting;
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
            $settings = Setting::get();
            $customPages =  CustomPage::query()
                                ->get();
            $data = Service::get(); // Fetch data from the database or inject service
            $view->with('services', $data); // Pass data to the view
            $view->with('settings', $settings->pluck('value', 'name')); // Pass data to the view
            $view->with('pages', $customPages);
        });
    }
}
