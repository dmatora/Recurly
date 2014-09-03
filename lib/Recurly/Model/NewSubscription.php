<?php

namespace Recurly\Model;

class NewSubscription implements ModelInterface
{
    /** @var string */
    protected $plan_code;
    /** @var Account */
    protected $account;
    /** @var string */
    protected $coupon_code;
    /** @var string */
    protected $unit_amount_in_cents;
    /** @var string */
    protected $currency;
    /** @var string */
    protected $quantity;
    /** @var \DateTime */
    protected $trial_ends_at;
    /** @var \DateTime */
    protected $starts_at;
    /** @var string */
    protected $total_billing_cycles;
    /** @var \DateTime */
    protected $first_renewal_date;
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
                'plan_code' => [
                    'type' => 'string',
                ],
                'account' => [
                    'type' => 'Recurly\Model\Account',
                ],
                'coupon_code' => [
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
                'trial_ends_at' => [
                    'type' => 'datetime',
                ],
                'starts_at' => [
                    'type' => 'datetime',
                ],
                'total_billing_cycles' => [
                    'type' => 'string',
                ],
                'first_renewal_date' => [
                    'type' => 'datetime',
                ],
                'subscription_add_ons' => [
                    'type' => 'array<Recurly\Model\Addon>',
                    'key'  => 'subscription_add_on',
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
     * @param string $coupon_code
     *
     * @return $this
     */
    public function setCouponCode($coupon_code)
    {
        $this->coupon_code = $coupon_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouponCode()
    {
        return $this->coupon_code;
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
     * @param \DateTime $first_renewal_date
     *
     * @return $this
     */
    public function setFirstRenewalDate(\DateTime $first_renewal_date)
    {
        $this->first_renewal_date = $first_renewal_date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstRenewalDate()
    {
        return $this->first_renewal_date;
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
     * @param Addon $addon
     *
     * @return $this
     */
    public function addSubscriptionAddon(Addon $addon)
    {
        $this->subscription_add_ons[] = $addon;
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
     * @param \DateTime $starts_at
     *
     * @return $this
     */
    public function setStartsAt(\DateTime $starts_at)
    {
        $this->starts_at = $starts_at;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartsAt()
    {
        return $this->starts_at;
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
    public function setTrialEndsAt(\DateTime $trial_ends_at)
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

} 