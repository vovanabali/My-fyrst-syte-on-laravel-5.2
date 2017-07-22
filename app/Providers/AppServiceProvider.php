<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('myDir',function ($var){
            return "<h1>New Directive - $var</h1>";
        });

        DB::listen(function ($query) { // При выполнении любого sql запроса выполняеться эта функция

            dump($query->sql); // Показывает все sql запросы которые были выполнены
            dump($query->bindings); // показывает все переменные которые были исползываены в запросах 
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
