<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('phone_number', function($attribute, $value, $parameters)
        {
            if (substr($value, 0, 3) == '012')
            {
                return substr($value, 0, 3) == '012';
            }
            elseif (substr($value, 0, 3) == '011')
            {
                return substr($value, 0, 3) == '011';
            }
            elseif (substr($value, 0, 3) == '015')
            {
                return substr($value, 0, 3) == '015';
            }
            elseif (substr($value, 0, 3) == '010')
            {
                return substr($value, 0, 3) == '010';
            }
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
