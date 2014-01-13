<?php

namespace Recurly\Model;

class Invoice implements ModelInterface
{
    /** @var string */
    protected $uuid;
    /** @var string */
    protected $state;
    /** @var int */
    protected $invoice_number;
    /** @var string */
    protected $po_number;
    /** @var string */
    protected $vat_number;
    /** @var int */
    protected $subtotal_in_cents;
    /** @var int*/
    protected $tax_in_cents;
    /** @var int */
    protected $total_in_cents;
    /** @var string */
    protected $currency;
    /** @var \DateTime */
    protected $created_at;
    /** @var \DateTime */
    protected $closed_at;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'uuid' => [
                    'type' => 'string',
                ],
                'state' => [
                    'type' => 'string',
                ],
                'invoice_number' => [
                    'type' => 'integer',
                ],
                'po_number' => [
                    'type' => 'string',
                ],
                'vat_number' => [
                    'type' => 'string',
                ],
                'subtotal_in_cents' => [
                    'type' => 'integer',
                ],
                'tax_in_cents' => [
                    'type' => 'integer',
                ],
                'total_in_cents' => [
                    'type' => 'integer',
                ],
                'currency' => [
                    'type' => 'string',
                ],
                'created_at' => [
                    'type' => 'datetime',
                ],
                'closed_at' => [
                    'type' => 'datetime',
                ],
            ],
        ];
    }

    /**
     * @param \DateTime $closed_at
     *
     * @return $this
     */
    public function setClosedAt($closed_at)
    {
        $this->closed_at = $closed_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->closed_at;
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
     * @param int $invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->invoice_number = $invoice_number;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * @param string $po_number
     *
     * @return $this
     */
    public function setPoNumber($po_number)
    {
        $this->po_number = $po_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
        return $this->po_number;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $subtotal_in_cents
     *
     * @return $this
     */
    public function setSubtotalInCents($subtotal_in_cents)
    {
        $this->subtotal_in_cents = $subtotal_in_cents;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubtotalInCents()
    {
        return $this->subtotal_in_cents;
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
     * @param int $total_in_cents
     *
     * @return $this
     */
    public function setTotalInCents($total_in_cents)
    {
        $this->total_in_cents = $total_in_cents;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalInCents()
    {
        return $this->total_in_cents;
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
     * @param string $vat_number
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->vat_number = $vat_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vat_number;
    }

}