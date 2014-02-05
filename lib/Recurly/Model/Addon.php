<?php

namespace Recurly\Model;

class Addon implements ModelInterface
{
    /** @var string */
    protected $add_on_code;
    /** @var int */
    protected $quantity;
    /** @var int */
    protected $unit_amount_in_cents;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'add_on_code' => [
                    'type' => 'string',
                ],
                'quantity' => [
                    'type' => 'integer',
                ],
                'unit_amount_in_cents' => [
                    'type' => 'integer',
                ],
            ],
        ];
    }

    /**
     * @param string $add_on_code
     *
     * @return $this
     */
    public function setAddOnCode($add_on_code)
    {
        $this->add_on_code = $add_on_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddOnCode()
    {
        return $this->add_on_code;
    }

    /**
     * @param int $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $unit_amount_in_cents
     *
     * @return $this
     */
    public function setUnitAmountInCents($unit_amount_in_cents)
    {
        $this->unit_amount_in_cents = $unit_amount_in_cents;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }


}