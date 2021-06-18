<?php

namespace Scott\OdinapiSaml2\Events;

use Classes\Saml2User;
use Classes\Saml2Auth;

class Saml2LoginEvent extends Saml2Event {

    protected $user;
    protected $auth;

    function __construct($idp, Saml2User $user, Saml2Auth $auth)
    {
        parent::__construct($idp);
        $this->user = $user;
        $this->auth = $auth;
    }

    public function getSaml2User()
    {
        return $this->user;
    }

    public function getSaml2Auth()
    {
        return $this->auth;
    }
}
