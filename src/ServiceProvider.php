<?php
/**
 * Created by PhpStorm.
 * User: ljx
 * Date: 2020/1/2
 * Time: 4:38 PM
 */

namespace SmauelL\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}