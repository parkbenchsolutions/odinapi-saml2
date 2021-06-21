<?php

namespace Parkbenchsolutions\OdinapiSaml2\Providers;

use Illuminate\Support\ServiceProvider;

class OdinapiSaml2ServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    // /**
    //  * Bootstrap the application events.
    //  *
    //  * @return void
    //  */
    // public function boot()
    // {
    //     $this->loadRoutesFrom(__DIR__.'/../saml2-routes.php');
    //     // $this->loadViewsFrom(__DIR__.'/../../resources/views', 'custom-auth');
    // }
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // if(config('saml2_settings.useRoutes', false) == true ){
        // }
        include __DIR__ . '/../saml2-routes.php';

        $this->publishes([
            __DIR__.'/../../config/saml2_settings.php' => config_path('saml2_settings.php'),
            __DIR__.'/../../config/test_idp_settings.php' => config_path('saml2'.DIRECTORY_SEPARATOR.'test_idp_settings.php'),
        ]);

        if (config('saml2_settings.proxyVars', false)) {
            OneLogin_Saml2_Utils::setProxyVars(true);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(Saml2Auth::class, function ($app) {
        //     $idpName = $app->request->route('idpName');
        //     $auth = Saml2Auth::loadOneLoginAuthFromIpdConfig($idpName);
        //     return new Saml2Auth($auth);
        // });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Saml2Auth::class];
    }

}
