<?php

namespace Parkbenchsolutions\OdinapiSaml2\Providers;

use Illuminate\Support\ServiceProvider;

class OdinapiSaml2ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../saml2-routes.php');
        // $this->loadViewsFrom(__DIR__.'/../../resources/views', 'custom-auth');
    }
}
