<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Http/Helpers/Sistem/bilangan.php';
        require_once app_path() . '/Http/Helpers/Sistem/data.php';
        require_once app_path() . '/Http/Helpers/Sistem/sistem.php';
        require_once app_path() . '/Http/Helpers/Sistem/view.php';
        require_once app_path() . '/Http/Helpers/Sistem/waktu.php';
        require_once app_path() . '/Http/Helpers/Sekolah/core.php';
        require_once app_path() . '/Http/Helpers/Sekolah/data.php';
        require_once app_path() . '/Http/Helpers/Sekolah/view.php';
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
