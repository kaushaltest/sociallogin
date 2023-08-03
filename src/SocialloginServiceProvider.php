<?php
namespace kaushal\sociallogin;
use Illuminate\Support\ServiceProvider;

class SocialloginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','sociallogin');
        $this->mergeConfigFrom(
            __DIR__.'/config/secretkey.php','sociallogin'
        );
        $this->publishes([
            __DIR__.'/config/secretkey.php' =>config_path('secretkey.php')
        ]);
    }

    public function register()
    {
        
    }
}