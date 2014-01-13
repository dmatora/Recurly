<?php

namespace Recurly\Model;

class Account implements ModelInterface
{
    /** @var string */
    protected $account_code;
    /** @var string */
    protected $state;
    /** @var string */
    protected $username;
    /** @var string */
    protected $email;
    /** @var string */
    protected $first_name;
    /** @var string */
    protected $last_name;
    /** @var string  */
    protected $company_name;
    /** @var string */
    protected $vat_number;
    /** @var Address */
    protected $address;
    /** @var string */
    protected $accept_language;
    /** @var string */
    protected $hosted_login_token;
    /** @var \DateTime */
    protected $created_at;
    /** @var BillingInfo */
    protected $billing_info;

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
                'state' => [
                    'type' => 'string',
                ],
                'username' => [
                    'type' => 'string',
                ],
                'email' => [
                    'type' => 'string',
                ],
                'first_name' => [
                    'type' => 'string',
                ],
                'last_name' => [
                    'type' => 'string',
                ],
                'company_name' => [
                    'type' => 'string',
                ],
                'vat_number' => [
                    'type' => 'string',
                ],
                'address' => [
                    'type' => 'Recurly\Model\Address',
                ],
                'accept_language' => [
                    'type' => 'string',
                ],
                'hosted_login_token' => [
                    'type' => 'string',
                ],
                'created_at' => [
                    'type' => 'datetime',
                ],
            ],
        ];
    }

    /**
     * @param string $accept_language
     *
     * @return $this
     */
    public function setAcceptLanguage($accept_language)
    {
        $this->accept_language = $accept_language;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcceptLanguage()
    {
        return $this->accept_language;
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
     * @param \Recurly\Model\Address $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return \Recurly\Model\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \Recurly\Model\BillingInfo $billing_info
     *
     * @return $this
     */
    public function setBillingInfo($billing_info)
    {
        $this->billing_info = $billing_info;
        return $this;
    }

    /**
     * @return \Recurly\Model\BillingInfo
     */
    public function getBillingInfo()
    {
        return $this->billing_info;
    }

    /**
     * @param string $company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
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
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $hosted_login_token
     *
     * @return $this
     */
    public function setHostedLoginToken($hosted_login_token)
    {
        $this->hosted_login_token = $hosted_login_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostedLoginToken()
    {
        return $this->hosted_login_token;
    }

    /**
     * @param string $last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
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
     * @param string $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
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