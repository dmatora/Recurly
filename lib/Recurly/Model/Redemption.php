<?php

namespace Recurly\Model;

class Redemption implements ModelInterface
{
    /** @var string */
    protected $account_code;
    /** @var string */
    protected $currency;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'account_code' => [
                    'type' => 'string',
                ],
                'currency' => [
                    'type' => 'string',
                ],
            ],
        ];
    }

    /**
     * @param string $account_code
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {
        $this->account_code = $account_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
        return $this->account_code;
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

} 