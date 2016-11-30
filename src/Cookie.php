<?php
namespace Qsnh\think\Auth;

use CodeZero\Cookie\VanillaCookie;
use CodeZero\Encrypter\DefaultEncrypter;

class Cookie
{

    protected static $instance = null;

    public static function get($key)
    {
        if (is_null(self::$instance)) {
            self::$instance = new VanillaCookie(new DefaultEncrypter($key));
        }

        return self::$instance;
    }

}