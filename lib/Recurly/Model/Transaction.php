<?php

namespace Recurly\Model;

class Transaction implements ModelInterface
{

    /** @var string */
    protected $uuid;
    /** @var string */
    protected $action;
    /** @var integer */
    protected $amount_in_cents;
    /** @var integer */
    protected $tax_in_cents;
    /** @var string */
    protected $currency;
    /** @var string */
    protected $status;
    /** @var string */
    protected $payment_method;
    /** @var string */
    protected $reference;
    /** @var string */
    protected $source;
    /** @var boolean */
    protected $recurring;
    /** @var boolean */
    protected $test;
    /** @var boolean */
    protected $voidable;
    /** @var boolean */
    protected $refundable;
    /** @var string */
    protected $cvv_result;
    /** @var string */
    protected $avs_result;
    /** @var string */
    protected $avs_result_street;
    /** @var string */
    protected $avs_result_postal;
    /** @var \DateTime */
    protected $created_at;


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
                'uuid' => [
                    'type' => 'string',
                ],
                'action' => [
                    'type' => 'string',
                ],
                'amount_in_cents' => [
                    'type' => 'integer',
                ],
                'tax_in_cents' => [
                    'type' => 'integer',
                ],
                'currency' => [
                    'type' => 'string',
                ],
                'status' => [
                    'type' => 'string',
                ],
                'payment_method' => [
                    'type' => 'string',
                ],
                'reference' => [
                    'type' => 'string',
                ],
                'source' => [
                    'type' => 'string',
                ],
                'recurring' => [
                    'type' => 'boolean',
                ],
                'test' => [
                    'type' => 'boolean',
                ],
                'voidable' => [
                    'type' => 'boolean',
                ],
                'refundable' => [
                    'type' => 'boolean',
                ],
                'cvv_result' => [
                    'type' => 'string',
                ],
                'avs_result' => [
                    'type' => 'string',
                ],
                'avs_result_street' => [
                    'type' => 'string',
                ],
                'avs_result_postal' => [
                    'type' => 'string',
                ],
                'created_at' => [
                    'type' => 'datetime',
                ],
            ],
        ];
    }

    /**
     * @param string $action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
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

    /**
     * @return int
     */
    public function getAmountInCents()
    {
        return $this->amount_in_cents;
    }

    /**
     * @param string $avs_result
     *
     * @return $this
     */
    public function setAvsResult($avs_result)
    {
        $this->avs_result = $avs_result;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvsResult()
    {
        return $this->avs_result;
    }

    /**
     * @param string $avs_result_postal
     *
     * @return $this
     */
    public function setAvsResultPostal($avs_result_postal)
    {
        $this->avs_result_postal = $avs_result_postal;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvsResultPostal()
    {
        return $this->avs_result_postal;
    }

    /**
     * @param string $avs_result_street
     *
     * @return $this
     */
    public function setAvsResultStreet($avs_result_street)
    {
        $this->avs_result_street = $avs_result_street;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvsResultStreet()
    {
        return $this->avs_result_street;
    }

    /**
     * @param \DateTime $created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
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
     * @param string $cvv_result
     *
     * @return $this
     */
    public function setCvvResult($cvv_result)
    {
        $this->cvv_result = $cvv_result;
        return $this;
    }

    /**
     * @return string
     */
    public function getCvvResult()
    {
        return $this->cvv_result;
    }

    /**
     * @param string $payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param boolean $recurring
     *
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param boolean $refundable
     *
     * @return $this
     */
    public function setRefundable($refundable)
    {
        $this->refundable = $refundable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
        return $this->refundable;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $tax_in_cents
     *
     * @return $this
     */
    public function setTaxInCents($tax_in_cents)
    {
        $this->tax_in_cents = $tax_in_cents;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxInCents()
    {
        return $this->tax_in_cents;
    }

    /**
     * @param boolean $test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->test = $test;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param boolean $voidable
     *
     * @return $this
     */
    public function setVoidable($voidable)
    {
        $this->voidable = $voidable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getVoidable()
    {
        return $this->voidable;
    }



} 