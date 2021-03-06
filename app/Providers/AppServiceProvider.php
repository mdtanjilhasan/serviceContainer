<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\PaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(PaymentGateway::class,function($app){
        //     return new PaymentGateway('usd');
        // });

        $this->app->singleton(PaymentGateway::class,function($app){
            return new PaymentGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
