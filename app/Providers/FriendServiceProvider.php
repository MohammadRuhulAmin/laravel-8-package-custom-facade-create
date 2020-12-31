<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TeamBravo\Profile\Friend\FriendList;

class FriendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('friendlist',function(){
            return new FriendList();
        });
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
