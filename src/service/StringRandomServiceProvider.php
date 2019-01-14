<?php

namespace String\Random\service;

use Illuminate\Support\ServiceProvider;
use String\Random\Lib\StringRandom;

class StringRandomServiceProvider extends ServiceProvider
{
    protected $defer = true; // 延迟加载服务

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        # $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->publishes([__DIR__ . '/../config/StringRandom.php' => config_path('/stringRandom.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('StringRandom', function () {
            return new StringRandom();
        });
    }


    public function provides()
    {
        return [StringRandom::class];
    }


}
