<?php

namespace Recurly\Model;

use JMS\Serializer\Annotation as JMS;

class Accounts 
{
    /**
     * @var Account[]
     *
     * @JMS\Type("array<Recurly\Model\Account>")
     * @JMS\XmlList(entry="account")
     */
    protected $accounts;

    /**
     * @param Account[] $accounts
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * @return Account[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

}