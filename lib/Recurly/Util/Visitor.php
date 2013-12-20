<?php

namespace Recurly\Util;

class Visitor 
{
    /**
     * Determines if the type is like "array<type>"
     * Sets the type by reference
     *
     * @param string  $context
     * @param string  $type
     * @param boolean $keepKey
     *
     * @return bool
     */
    protected function isArrayType($context, &$type, &$keepKey)
    {
        $keepKey = false;
        $result  = preg_match('/^array<(.*)>$/', $context, $matches);
        if ($result === 1) {
            $type = $matches[1];
            return true;
        }
        $result = preg_match('/^assocArray<(.*)>$/', $context, $matches);
        if ($result === 1) {
            $type    = $matches[1];
            $keepKey = true;
            return true;
        }
        return false;
    }
} 