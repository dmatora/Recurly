<?php

namespace Recurly\Util;

class MethodHelper 
{
    public static function getGetter($variable)
    {
        return 'get' . self::upperCaser($variable);
    }

    public static function getSetter($variable)
    {
        return 'set' . self::upperCaser($variable);
    }

    protected static function upperCaser($variable)
    {
        return preg_replace_callback(
            '/(^|_)([a-z])/',
            function($matches) {
                return strtoupper($matches[2]);
            },
            $variable
        );
    }

} 