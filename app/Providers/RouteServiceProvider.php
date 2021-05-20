<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';
    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapCompanyRoutes();
        $this->mapAdminRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace . '\User')
            ->group(base_path('routes/web.php'));
    }

    protected function mapCompanyRoutes()
    {
        Route::middleware('web')
            ->as('company.')
            ->prefix('company')
            ->namespace($this->namespace . '\company')
            ->group(base_path('routes/company.php'));
    }
    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->as('admin.')
            ->prefix('admin')
            ->namespace($this->namespace . '\Admin')
            ->group(base_path('routes/admin.php'));
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
