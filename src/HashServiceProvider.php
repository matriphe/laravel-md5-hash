<?php

namespace Matriphe\Md5Hash;

class HashServiceProvider extends \Illuminate\Hashing\HashServiceProvider
{
    public function register()
    {
        $this->app->singleton('hash', function ($app) {
            return new Md5HasherManager($app);
        });
    }
}
