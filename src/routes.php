<?php

use App\Classes\Helpers;

Route::middleware('App\Http\Middleware\Saml2')
->prefix('/api/v2/sso/saml2/')->group(function() {
    Route::prefix('odinsaml')->group(function() {

        $saml2_controller = 'App\Http\Controllers\Sso\Saml2Controller';
        Helpers::debug('in saml2 routes');

        // dd($saml2_controller);
        Route::get('/logout', array(
            'as' => 'saml2_logout',
            'uses' => $saml2_controller.'@logout',
        ));

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
