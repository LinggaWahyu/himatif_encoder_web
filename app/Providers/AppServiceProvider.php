<?php

namespace App\Providers;

use App\Models\ProfileJurusan;
use Illuminate\Support\ServiceProvider;

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
        $himatif = ProfileJurusan::first();
        if (!empty($himatif)) {
            view()->share('himatif', $himatif);
        }
    }
}
