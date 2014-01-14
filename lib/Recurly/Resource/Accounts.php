<?php

namespace Recurly\Resource;

use \Recurly\Model\Account;

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

        return $this->apiGet($suffix, $context);
    }

    /**
     * Gets a specified account
     *
     * @param string $accountCode
     *
     * @return \Recurly\Model\Account
     */
    public function get($accountCode)
    {
        $suffix  = sprintf('accounts/%s', $accountCode);
        $context = 'Recurly\Model\Account';

        return $this->apiGet($suffix, $context);
    }

    /**
     * Gets the billing info for a specified account
     *
     * @param string $accountCode
     *
     * @return \Recurly\Model\BillingInfo
     */
    public function getBillingInfo($accountCode)
    {
        $suffix  = sprintf('accounts/%s/billing_info', $accountCode);
        $context = 'Recurly\Model\BillingInfo';

        return $this->apiGet($suffix, $context);
    }

    /**
     * Gets the invoices for a specified account
     *
     * @param string $accountCode
     *
     * @return \Recurly\Model\Invoice[]
     */
    public function getInvoices($accountCode)
    {
        $suffix  = sprintf('accounts/%s/invoices', $accountCode);
        $context = 'array<Recurly\Model\Invoice>';

        return $this->apiGet($suffix, $context);
    }

    /**
     * Gets the subscriptions for a specified account
     *
     * @param string $accountCode
     *
     * @return \Recurly\Model\Subscription[]
     */
    public function getSubscriptions($accountCode)
    {
        $suffix  = sprintf('accounts/%s/subscriptions', $accountCode);
        $context = 'array<Recurly\Model\Subscription>';

        return $this->apiGet($suffix, $context);
    }
} 