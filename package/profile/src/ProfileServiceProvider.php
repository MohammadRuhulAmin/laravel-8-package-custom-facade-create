<?php 
namespace TeamBravo\Profile;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider{
    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"Profile");
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([__DIR__.'/assets'=>public_path('profile')],'assets');

        $router = $this->app->make(Router::class);

        //$router->aliasMiddleware('UserActionMiddleware', ::class);



       







    }

    public function register(){


    }
}

