<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

//Para la paginacion
use Illuminate\Pagination\Paginator;

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
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        // Blade::directive('estado', function ($estado) {
        //     switch ($estado) {
        //         case 'por aprobar':
        //             return '<span class="badge badge-warning">por aprobar</span>';
        //         case 'activo':
        //             return '<span class="badge badge-primary">activo</span>';
        //         case 'inactivo':
        //             return '<span class="badge badge-success">inactivo</span>';
                
        //         default:
        //             return '<span class="badge badge-secondary">' . $estado . '</span>';
        //     }
        // });

    }
}
