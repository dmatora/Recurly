<?php

namespace Recurly\Model;

class Subscription implements ModelInterface
{
    /** @var string */
    protected $invoice;
    /** @var Plan */
    protected $plan;
    /** @var string */
    protected $uuid;
    /** @var string */
    protected $state;
    /** @var string */
    protected $unit_amount_in_cents;
    /** @var string */
    protected $currency;
    /** @var string */
    protected $quantity;
    /** @var \DateTime */
    protected $activated_at;
    /** @var \DateTime */
    protected $canceled_at;
    /** @var \DateTime */
    protected $expires_at;
    /** @var string */
    protected $total_billing_cycles;
    /** @var string */
    protected $remaining_billing_cycles;
    /** @var \DateTime */
    protected $current_period_started_at;
    /** @var \DateTime */
    protected $current_period_ends_at;
    /** @var \DateTime */
    protected $trial_started_at;
    /** @var \DateTime */
    protected $trial_ends_at;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'invoice' => [
                    'type'          => 'string',
                    'fromAttribute' => 'href',
                    'regex'         => '/^.+\/(\d+)$/',
                ],
                'plan' => [
                    'type' => 'Recurly\Model\Plan',
                ],
                'uuid' => [
                    'type' => 'string',
                ],
                'state' => [
                    'type' => 'string',
                ],
                'unit_amount_in_cents' => [
                    'type' => 'string',
                ],
                'currency' => [
                    'type' => 'string',
                ],
                'quantity' => [
                    'type' => 'string',
                ],
                'activated_at' => [
                    'type' => 'datetime',
                ],
                'canceled_at' => [
                    'type' => 'datetime',
                ],
                'expires_at' => [
                    'type' => 'datetime',
                ],
                'total_billing_cycles' => [
                    'type' => 'string',
                ],
                'remaining_billing_cycles' => [
                    'type' => 'string',
                ],
                'current_period_started_at' => [
                    'type' => 'datetime',
                ],
                'current_period_ends_at' => [
                    'type' => 'datetime',
                ],
                'trial_started_at' => [
                    'type' => 'datetime',
                ],
                'trial_ends_at' => [
                    'type' => 'datetime',
                ],
            ],
        ];
    }

    /**
     * @param \DateTime $activated_at
     *
     * @return $this
     */
    public function setActivatedAt($activated_at)
    {
        $this->activated_at = $activated_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActivatedAt()
    {
        return $this->activated_at;
    }

    /**
     * @param \DateTime $canceled_at
     *
     * @return $this
     */
    public function setCanceledAt($canceled_at)
    {
        $this->canceled_at = $canceled_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCanceledAt()
    {
        return $this->canceled_at;
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
     * @param \DateTime $current_period_ends_at
     *
     * @return $this
     */
    public function setCurrentPeriodEndsAt($current_period_ends_at)
    {
        $this->current_period_ends_at = $current_period_ends_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentPeriodEndsAt()
    {
        return $this->current_period_ends_at;
    }

    /**
     * @param \DateTime $current_period_started_at
     *
     * @return $this
     */
    public function setCurrentPeriodStartedAt($current_period_started_at)
    {
        $this->current_period_started_at = $current_period_started_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentPeriodStartedAt()
    {
        return $this->current_period_started_at;
    }

    /**
     * @param \DateTime $expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->expires_at = $expires_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * @param string $invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param \Recurly\Model\Plan $plan
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return \Recurly\Model\Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param string $remaining_billing_cycles
     *
     * @return $this
     */
    public function setRemainingBillingCycles($remaining_billing_cycles)
    {
        $this->remaining_billing_cycles = $remaining_billing_cycles;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemainingBillingCycles()
    {
        return $this->remaining_billing_cycles;
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
     * @param string $total_billing_cycles
     *
     * @return $this
     */
    public function setTotalBillingCycles($total_billing_cycles)
    {
        $this->total_billing_cycles = $total_billing_cycles;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotalBillingCycles()
    {
        return $this->total_billing_cycles;
    }

    /**
     * @param \DateTime $trial_ends_at
     *
     * @return $this
     */
    public function setTrialEndsAt($trial_ends_at)
    {
        $this->trial_ends_at = $trial_ends_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTrialEndsAt()
    {
        return $this->trial_ends_at;
    }

    /**
     * @param \DateTime $trial_started_at
     *
     * @return $this
     */
    public function setTrialStartedAt($trial_started_at)
    {
        $this->trial_started_at = $trial_started_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTrialStartedAt()
    {
        return $this->trial_started_at;
    }

    /**
     * @param string $unit_amount_in_cents
     *
     * @return $this
     */
    public function setUnitAmountInCents($unit_amount_in_cents)
    {
        $this->unit_amount_in_cents = $unit_amount_in_cents;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
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


} 