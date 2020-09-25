<?php

namespace Nero990\Google2FALaravel;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Nero990\Google2FALaravel\Support\Authenticator;

class Facade extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nero990.google2fa';
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function logout()
    {
        (new Authenticator(request()))->logout();
    }
}
