<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Formatter\LogstashFormatter;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $_monolog = \Log::getMonolog();
        $_handler = $_monolog->popHandler();
        $_handler->setFormatter(new LogstashFormatter('image-api', 'image-api', null, 'ctxt_', LogstashFormatter::V1));
        $_monolog->pushHandler($_handler);
    }
}
