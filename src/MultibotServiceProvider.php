<?php

namespace Made\Multibot;

use Illuminate\Support\ServiceProvider;

class MultibotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/config/multibot.php' => config_path('multibot.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
       
        $this->app->bind('multibot_client',function() { 
            return new \Made\Multibot\MultibotClient(config('multibot.server'),config('multibot.timeout'));
        });
        
    }
}
