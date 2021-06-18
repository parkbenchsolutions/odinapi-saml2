<?php

use Log;

Route::middleware(config('saml2_settings.routesMiddleware'))
->prefix(config('saml2_settings.routesPrefix').'/')->group(function() {
    Route::prefix('{idpName}')->group(function() {
	$saml2_controller = config('saml2_settings.saml2_controller', 'Parkbenchsolutions\OdinapiSaml2\Http\Controllers\Saml2Controller');
Log::info('in routes 1');
        Route::get('/logout', array(
            'as' => 'saml2_logout',
            // 'uses' => $saml2_controller.'@logout',
        //     // 'uses' => '../src/Http/Controllers/Saml2Controller'.'@logout',
        //     // 'uses' => 'Http/Controllers/Saml2Controller'.'@logout',
        //     // packages/OdinapiSaml2/src/Http/Controllers/Saml2Controller.php
            'uses' => $saml2_controller.'@logout',
            // 'uses' => 'Saml2Controller@logout',
        ));
        // Route::get('logout2', 'Parkbenchsolutions\OdinapiSaml2\Http\Controllers\Saml2Controller@logout')->name('logout2');
        // Route::get('logout2', [RegisterController::class, 'create'])->name('register');

        Route::get('/login', array(
            'as' => 'saml2_login',
            'uses' => $saml2_controller.'@login',
        ));

        Route::get('/metadata', array(
            'as' => 'saml2_metadata',
            'uses' => $saml2_controller.'@metadata',
        ));

        Route::post('/acs', array(
            'as' => 'saml2_acs',
            'uses' => $saml2_controller.'@acs',
        ));

        Route::get('/sls', array(
            'as' => 'saml2_sls',
            'uses' => $saml2_controller.'@sls',
        ));
    });
});
