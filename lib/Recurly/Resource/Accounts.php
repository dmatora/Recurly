<?php

namespace Recurly\Resource;

use \Recurly\Model\Account as AccountModel;

class Accounts extends Resource
{

    /**
     * Gets all accounts
     *
     * @return \Recurly\Model\Account[]
     */
    public function getAll()
    {
        $suffix  = 'accounts';
        $context = 'array<Recurly\Model\Account>';

        return $this->_get($suffix, $context);
    }

    /**
     * Gets a specified account
     *
     * @param $id
     *
     * @return \Recurly\Model\Account
     */
    public function get($id)
    {
        $suffix  = sprintf('accounts/%s', $id);
        $context = 'Recurly\Model\Account';

        return $this->_get($suffix, $context);
    }

    /**
     * Gets the billing info for a specified account
     *
     * @param AccountModel $account
     *
     * @return \Recurly\Model\BillingInfo
     */
    public function getBillingInfo(AccountModel $account)
    {
        $suffix  = sprintf('accounts/%s/billing_info', $account->getAccountCode());
        $context = 'Recurly\Model\BillingInfo';

        return $this->_get($suffix, $context);
    }
} 