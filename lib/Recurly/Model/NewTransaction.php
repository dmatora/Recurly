<?php

namespace Recurly\Model;

class NewTransaction implements ModelInterface
{
    /** @var Account */
    protected $account;
    /** @var integer */
    protected $amount_in_cents;
    /** @var string */
    protected $currency;
    /** @var string */
    protected $description;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'properties' => [
                'rootName' => 'transaction',
            ],
            'attributes' => [
                'account' => [
                    'type' => 'Account',
                ],
                'amount_in_cents' => [
                    'type' => 'integer',
                ],
                'currency' => [
                    'type' => 'string',
                ],
                'description' => [
                    'type' => 'string',
                ],
            ],
        ];
    }

    /**
     * @param Account $account
     *
     * @return $this
     */
    public function setAccount(Account $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param int $amount_in_cents
     *
     * @return $this
     */
    public function setAmountInCents($amount_in_cents)
    {
        $this->amount_in_cents = $amount_in_cents;
        return $this;
    }

    public function setAmountInCurrency($amount_in_currency)
    {
        $this->setAmountInCents($amount_in_currency * 100);
        return $this;
    }

    /**
     * @return int
     */
    public function getAmountInCents()
    {
        return $this->amount_in_cents;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

} 