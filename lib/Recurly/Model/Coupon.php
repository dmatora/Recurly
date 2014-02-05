<?php

namespace Recurly\Model;

class Coupon implements ModelInterface
{
    /** @var string */
    protected $coupon_code;
    /** @var string */
    protected $name;
    /** @var string */
    protected $state;
    /** @var string */
    protected $hosted_description;
    /** @var string */
    protected $invoice_description;
    /** @var string */
    protected $discount_type;
    /** @var integer */
    protected $discount_percent;
    /** @var array */
    protected $discount_in_cents;
    /** @var \DateTime */
    protected $redeem_by_date;
    /** @var boolean */
    protected $single_use;
    /** @var string */
    protected $applies_for_months;
    /** @var integer */
    protected $max_redemptions;
    /** @var boolean */
    protected $applies_to_all_plans;
    /** @var \DateTime */
    protected $created_at;
    /** @var array */
    protected $plan_codes;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'coupon_code' => [
                    'type' => 'string',
                ],
                'name' => [
                    'type' => 'string',
                ],
                'state' => [
                    'type' => 'string',
                ],
                'hosted_description' => [
                    'type' => 'string',
                ],
                'invoice_description' => [
                    'type' => 'string',
                ],
                'discount_type' => [
                    'type' => 'string',
                ],
                'discount_percent' => [
                    'type' => 'integer',
                ],
                'discount_in_cents' => [
                    'type' => 'assocArray<integer>',
                ],
                'redeem_by_date' => [
                    'type' => 'datetime',
                ],
                'single_use' => [
                    'type' => 'boolean',
                ],
                'applies_for_months' => [
                    'type' => 'string',
                ],
                'max_redemptions' => [
                    'type' => 'string',
                ],
                'applies_to_all_plans' => [
                    'type' => 'boolean',
                ],
                'created_at' => [
                    'type' => 'datetime',
                ],
                'plan_codes' => [
                    'type' => 'array<string>',
                    'key'  => 'plan_code',
                ],
            ],
        ];
    }

    /**
     * @param string $applies_for_months
     *
     * @return $this
     */
    public function setAppliesForMonths($applies_for_months)
    {
        $this->applies_for_months = $applies_for_months;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppliesForMonths()
    {
        return $this->applies_for_months;
    }

    /**
     * @param boolean $applies_to_all_plans
     *
     * @return $this
     */
    public function setAppliesToAllPlans($applies_to_all_plans)
    {
        $this->applies_to_all_plans = $applies_to_all_plans;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAppliesToAllPlans()
    {
        return $this->applies_to_all_plans;
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
     * @param array $discount_in_cents
     *
     * @return $this
     */
    public function setDiscountInCents(array $discount_in_cents = null)
    {
        $this->discount_in_cents = $discount_in_cents;
        return $this;
    }

    /**
     * @return array
     */
    public function getDiscountInCents()
    {
        return $this->discount_in_cents;
    }

    public function getDiscount($currency)
    {
        return $this->getDiscountInCents()[$currency] / 100;
    }

    /**
     * @param int $discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    /**
     * @param string $discount_type
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->discount_type = $discount_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discount_type;
    }

    /**
     * @param string $hosted_description
     *
     * @return $this
     */
    public function setHostedDescription($hosted_description)
    {
        $this->hosted_description = $hosted_description;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostedDescription()
    {
        return $this->hosted_description;
    }

    /**
     * @param string $invoice_description
     *
     * @return $this
     */
    public function setInvoiceDescription($invoice_description)
    {
        $this->invoice_description = $invoice_description;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->invoice_description;
    }

    /**
     * @param int $max_redemptions
     *
     * @return $this
     */
    public function setMaxRedemptions($max_redemptions)
    {
        $this->max_redemptions = $max_redemptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRedemptions()
    {
        return $this->max_redemptions;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param array $plan_codes
     *
     * @return $this
     */
    public function setPlanCodes($plan_codes)
    {
        $this->plan_codes = $plan_codes;
        return $this;
    }

    /**
     * @return array
     */
    public function getPlanCodes()
    {
        return $this->plan_codes;
    }

    /**
     * @param \DateTime $redeem_by_date
     *
     * @return $this
     */
    public function setRedeemByDate($redeem_by_date)
    {
        $this->redeem_by_date = $redeem_by_date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRedeemByDate()
    {
        return $this->redeem_by_date;
    }

    /**
     * @param boolean $single_use
     *
     * @return $this
     */
    public function setSingleUse($single_use)
    {
        $this->single_use = $single_use;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSingleUse()
    {
        return $this->single_use;
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
} 