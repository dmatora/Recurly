<?php

namespace Recurly\Util;

class Hasher 
{
    public static function hash($message, $privateKey)
    {
        return hash_hmac('sha1', $message, $privateKey);
    }
} 