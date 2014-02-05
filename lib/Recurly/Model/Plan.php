<?php

namespace Recurly\Model;

class Plan implements ModelInterface
{
    /** @var string */
    protected $plan_code;
    /** @var string */
    protected $name;
    /** @var string */
    protected $description;
    /** @var string */
    protected $success_url;
    /** @var string */
    protected $cancel_url;
    /** @var boolean */
    protected $display_donation_amounts;
    /** @var boolean */
    protected $display_quantity;
    /** @var boolean */
    protected $display_phone_number;
    /** @var boolean */
    protected $bypass_hosted_confirmation;
    /** @var string */
    protected $unit_name;
    /** @var string */
    protected $payment_page_tos_link;
    /** @var integer */
    protected $plan_interval_length;
    /** @var string */
    protected $plan_interval_unit;
    /** @var integer */
    protected $trial_interval_length;
    /** @var string */
    protected $trial_interval_unit;
    /** @var string */
    protected $accounting_code;
    /** @var \DateTime */
    protected $created_at;
    /** @var array */
    protected $unit_amount_in_cents;
    /** @var array */
    protected $setup_fee_in_cents;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'plan_code' => [
                    'type' => 'string',
                ],
                'name' => [
                    'type' => 'string',
                ],
                'description' => [
                    'type' => 'string',
                ],
                'success_url' => [
                    'type' => 'string',
                ],
                'cancel_url' => [
                    'type' => 'string',
                ],
                'display_donation_amounts' => [
                    'type' => 'boolean',
                ],
                'display_quantity' => [
                    'type' => 'boolean',
                ],
                'display_phone_number' => [
                    'type' => 'boolean',
                ],
                'bypass_hosted_confirmation' => [
                    'type' => 'boolean',
                ],
                'unit_name' => [
                    'type' => 'string',
                ],
                'payment_page_tos_link' => [
                    'type' => 'string',
                ],
                'plan_interval_length' => [
                    'type' => 'string',
                ],
                'plan_interval_unit' => [
                    'type' => 'string',
                ],
                'trial_interval_length' => [
                    'type' => 'string',
                ],
                'trial_interval_unit' => [
                    'type' => 'string',
                ],
                'accounting_code' => [
                    'type' => 'string',
                ],
                'created_at' => [
                    'type' => 'datetime',
                ],
                'unit_amount_in_cents' => [
                    'type' => 'assocArray<string>',
                ],
                'setup_fee_in_cents' => [
                    'type' => 'assocArray<string>',
                ],
            ],
        ];
    }

    /**
     * @param string $accounting_code
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->accounting_code = $accounting_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->accounting_code;
    }

    /**
     * @param boolean $bypass_hosted_confirmation
     *
     * @return $this
     */
    public function setBypassHostedConfirmation($bypass_hosted_confirmation)
    {
        $this->bypass_hosted_confirmation = $bypass_hosted_confirmation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBypassHostedConfirmation()
    {
        return $this->bypass_hosted_confirmation;
    }

    /**
     * @param string $cancel_url
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->cancel_url = $cancel_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
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

    /**
     * @param boolean $display_donation_amounts
     *
     * @return $this
     */
    public function setDisplayDonationAmounts($display_donation_amounts)
    {
        $this->display_donation_amounts = $display_donation_amounts;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayDonationAmounts()
    {
        return $this->display_donation_amounts;
    }

    /**
     * @param boolean $display_phone_number
     *
     * @return $this
     */
    public function setDisplayPhoneNumber($display_phone_number)
    {
        $this->display_phone_number = $display_phone_number;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayPhoneNumber()
    {
        return $this->display_phone_number;
    }

    /**
     * @param boolean $display_quantity
     *
     * @return $this
     */
    public function setDisplayQuantity($display_quantity)
    {
        $this->display_quantity = $display_quantity;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayQuantity()
    {
        return $this->display_quantity;
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
     * @param string $payment_page_tos_link
     *
     * @return $this
     */
    public function setPaymentPageTosLink($payment_page_tos_link)
    {
        $this->payment_page_tos_link = $payment_page_tos_link;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentPageTosLink()
    {
        return $this->payment_page_tos_link;
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
     * @param int $plan_interval_length
     *
     * @return $this
     */
    public function setPlanIntervalLength($plan_interval_length)
    {
        $this->plan_interval_length = $plan_interval_length;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlanIntervalLength()
    {
        return $this->plan_interval_length;
    }

    /**
     * @param string $plan_interval_unit
     *
     * @return $this
     */
    public function setPlanIntervalUnit($plan_interval_unit)
    {
        $this->plan_interval_unit = $plan_interval_unit;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanIntervalUnit()
    {
        return $this->plan_interval_unit;
    }

    /**
     * @param array $setup_fee_in_cents
     *
     * @return $this
     */
    public function setSetupFeeInCents($setup_fee_in_cents)
    {
        $this->setup_fee_in_cents = $setup_fee_in_cents;
        return $this;
    }

    /**
     * @return array
     */
    public function getSetupFeeInCents()
    {
        return $this->setup_fee_in_cents;
    }

    /**
     * @param string $success_url
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->success_url = $success_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * @param int $trial_interval_length
     *
     * @return $this
     */
    public function setTrialIntervalLength($trial_interval_length)
    {
        $this->trial_interval_length = $trial_interval_length;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrialIntervalLength()
    {
        return $this->trial_interval_length;
    }

    /**
     * @param string $trial_interval_unit
     *
     * @return $this
     */
    public function setTrialIntervalUnit($trial_interval_unit)
    {
        $this->trial_interval_unit = $trial_interval_unit;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrialIntervalUnit()
    {
        return $this->trial_interval_unit;
    }

    /**
     * @param array $unit_amount_in_cents
     *
     * @return $this
     */
    public function setUnitAmountInCents($unit_amount_in_cents)
    {
        $this->unit_amount_in_cents = $unit_amount_in_cents;
        return $this;
    }

    /**
     * @return array
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }

    /**
     * @param $currency
     *
     * @return int
     */
    public function getUnitAmount($currency)
    {
        return $this->unit_amount_in_cents[$currency] / 100;
    }

    /**
     * @param string $unit_name
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->unit_name = $unit_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitName()
    {
        return $this->unit_name;
    }



}