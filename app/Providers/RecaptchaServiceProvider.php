<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use ReCaptcha\ReCaptcha;

class RecaptchaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ReCaptcha::class, function ($app) {
            return new ReCaptcha(config('recaptcha.secret_key'));
        });
    }
}


