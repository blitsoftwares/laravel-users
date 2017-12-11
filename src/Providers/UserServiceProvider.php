<?php

namespace Blit\Users\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $langDir        = __DIR__ . '/../Lang';
        $routeDir       = __DIR__ . '/../Routes/web.php';
        $configDir      = __DIR__ . '/../Config/blit-users.php';
        $viewsDir       = __DIR__ . '/../Views';

        Route::namespace("Blit\\Users\\Http\\Controllers")
        ->middleware(config('BlitUsers.route_middleware'))
        ->group($routeDir);

        $this->loadTranslationsFrom($langDir,'BlitUsers');
        $this->loadViewsFrom($viewsDir,'BlitUsers');

        $this->publishes([$langDir => resource_path('lang/vendor/BlitUsers')],'BlitUsers-lang');
        $this->publishes([$viewsDir => resource_path('views/vendor/BlitUsers')],'BlitUsers-views');
        $this->publishes([$configDir => config_path('blit-users.php')],'BlitUsers-config');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/blit-users.php','BlitUsers');
    }

}