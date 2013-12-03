<?php

namespace Recurly\Resource;

class Account extends Resource
{
    public function get($id = null)
    {
        if (null === $id) {
            $suffix = 'accounts';
            $context = 'Recurly\Model\Accounts';
        } else {
            $suffix = sprintf('accounts/%s', $id);
            $context = 'Recurly\Model\Account';
        }

        return $this->_get($suffix, $context);
    }
} 