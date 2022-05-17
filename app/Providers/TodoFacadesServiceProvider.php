<?php

namespace App\Providers;

use App\Support\MyTodo;
use Illuminate\Support\ServiceProvider;

class TodoFacadesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mylibrary',function($app){
            return new MyTodo;
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
