<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OwnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('myName', \Reffect\MyName::class);
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

namespace Reffect;

class MyName
{
    
    public function run(){

        return 'John Doe';

    }
   
}