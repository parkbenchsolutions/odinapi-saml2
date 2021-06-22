<?php

namespace Parkbenchsolutions\OdinapiSaml2;

use OneLogin\Saml2\Utils as OneLogin_Saml2_Utils;
use Illuminate\Support\ServiceProvider;

class Saml2ServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../../routes.php';
    }
}
