<?php

namespace Webnets\Paypal;

use Illuminate\Support\ServiceProvider;

class PaypalServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'paypal');
        $this->mergeConfigFrom(__DIR__.'/config/paypal.php', 'paypal');
        $this->publishes([__DIR__.'/config/paypal.php' => 'config/paypal.php']);
    }

    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }

}