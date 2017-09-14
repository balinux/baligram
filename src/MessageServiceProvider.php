<?php

namespace Balinux\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes/routes.php'; 
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('balinux-message', function ()
        {
            return new Message();
        });

        $this->app->bind('guzzle', function ($app) {
            return new \GuzzleHttp\Client();
        });
        
        $this->app->bind('balinux-instagram', function ()
        {
            return new Instagram();
        });


    }
}
