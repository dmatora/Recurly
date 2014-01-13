<?php

namespace Recurly\Resource;

use Recurly\Model\Account;
use Recurly\Model\NewTransaction;

class Transactions extends Resource
{
    /**
     * @param Account $account
     * @param float   $amountInCurrency
     * @param string  $description
     *
     * @return bool
     */
    public function create(Account $account, $amountInCurrency, $description)
    {
        $transaction = new NewTransaction();
        $transaction
            ->setAccount($account)
            ->setAmountInCurrency($amountInCurrency)
            ->setCurrency('USD')
            ->setDescription($description);

        return $this->apiPost(
            'transactions',
            $transaction
        );
    }

}