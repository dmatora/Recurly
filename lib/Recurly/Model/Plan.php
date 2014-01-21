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


}