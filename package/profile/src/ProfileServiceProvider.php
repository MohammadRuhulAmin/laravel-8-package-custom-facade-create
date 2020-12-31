<?php 
namespace TeamBravo\Profile;

use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider{
    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"Profile");
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([__DIR__.'/assets'=>public_path('profile')],'assets');



       







    }

    public function register(){


    }
}

