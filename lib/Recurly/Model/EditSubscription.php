<?php

namespace Recurly\Model;

class EditSubscription implements ModelInterface
{
    /** @var "now"|"renewal" */
    protected $timeframe;
    /** @var string */
    protected $plan_code;
    /** @var integer */
    protected $quantity;
    /** @var integer */
    protected $unit_amount_in_cents;
    /** @var Addon[] */
    protected $subscription_add_ons;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'properties' => [
                'rootName' => 'subscription',
            ],
            'attributes' => [
                'timeframe' => [
                    'type' => 'string',
                ],
                'plan_code' => [
                    'type' => 'string',
                ],
                'quantity' => [
                    'type' => 'integer',
                ],
                'unit_amount_in_cents' => [
                    'type' => 'integer',
                ],
                'subscription_add_ons' => [
                    'type' => 'array<Recurly\Model\Addon>',
                ],
            ],
        ];
    }

    /**
     * @param string $plan_code
     *
     * @return $this
     */
    public function setPlanCode($plan_code)
    {
        $this->plan_code = $plan_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanCode()
    {
        return $this->plan_code;
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
     * @param Addon[] $subscription_add_ons
     *
     * @return $this
     */
    public function setSubscriptionAddOns($subscription_add_ons)
    {
        $this->subscription_add_ons = $subscription_add_ons;
        return $this;
    }

    /**
     * @return Addon[]
     */
    public function getSubscriptionAddOns()
    {
        return $this->subscription_add_ons;
    }

    /**
     * @param "now"|"renewal" $timeframe
     *
     * @return $this
     */
    public function setTimeframe($timeframe)
    {
        $this->timeframe = $timeframe;
        return $this;
    }

    /**
     * @return "now"|"renewal"
     */
    public function getTimeframe()
    {
        return $this->timeframe;
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