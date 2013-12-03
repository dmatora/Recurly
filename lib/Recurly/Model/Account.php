<?php

namespace Recurly\Model;

use JMS\Serializer\Annotation as JMS;

class Account
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $account_code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $state;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $username;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $email;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $first_name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $last_name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $company_name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $vat_number;

    /**
     * @var Address
     *
     * @JMS\Type("Recurly\Model\Address")
     */
    protected $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $accept_language;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $hosted_login_token;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime")
     */
    protected $created_at;

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