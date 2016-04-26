<?php

namespace LucasRuroken\RoutesFolder;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class RoutesFolderProvider extends ServiceProvider {

    /**
     * Boot method
     * 
     * @return void
     */
    public function boot(Router $router) {

        require __DIR__.'/Routes.php';
    }

    /**
     * Register method
     * 
     * We don't use this, so return false
     * 
     * @return false
     */
    public function register() {
        return false;
    }

}