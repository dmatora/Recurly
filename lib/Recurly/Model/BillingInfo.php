<?php

namespace Recurly\Model;

class BillingInfo implements ModelInterface
{
    /** @var string */
    protected $first_name;
    /** @var string */
    protected $last_name;
    /** @var string */
    protected $company;
    /** @var string */
    protected $address1;
    /** @var string */
    protected $address2;
    /** @var string */
    protected $city;
    /** @var string */
    protected $state;
    /** @var string */
    protected $zip;
    /**@var string*/
    protected $country;
    /**@var string*/
    protected $phone;
    /** @var string */
    protected $vat_number;
    /** @var string */
    protected $ip_address;
    /** @var string */
    protected $ip_address_country;
    /** @var string */
    protected $card_type;
    /** @var integer */
    protected $year;
    /** @var integer */
    protected $month;
    /** @var string */
    protected $number;
    /** @var string */
    protected $first_six;
    /** @var string */
    protected $last_four;
    /** @var string */
    protected $verification_value;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'properties' => [
                'rootName' => 'billing_info',
            ],
            'attributes' => [
                'first_name' => [
                    'type' => 'string',
                ],
                'last_name' => [
                    'type' => 'string',
                ],
                'company' => [
                    'type' => 'string',
                ],
                'address1' => [
                    'type' => 'string',
                ],
                'address2' => [
                    'type' => 'string',
                ],
                'city' => [
                    'type' => 'string',
                ],
                'state' => [
                    'type' => 'string',
                ],
                'zip' => [
                    'type' => 'string',
                ],
                'country' => [
                    'type' => 'string',
                ],
                'phone' => [
                    'type' => 'string',
                ],
                'vat_number' => [
                    'type' => 'string',
                ],
                'ip_address' => [
                    'type' => 'string',
                ],
                'ip_address_country' => [
                    'type' => 'string',
                ],
                'card_type' => [
                    'type' => 'string',
                ],
                'year' => [
                    'type' => 'integer',
                ],
                'month' => [
                    'type' => 'integer',
                ],
                'number' => [
                    'type' => 'string',
                ],
                'first_six' => [
                    'type' => 'string',
                ],
                'last_four' => [
                    'type' => 'string',
                ],
                'verification_value' => [
                    'type' => 'string',
                ],
            ],
        ];
    }

    /**
     * @param string $address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $card_type
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->card_type = $card_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
     * @param string $first_six
     *
     * @return $this
     */
    public function setFirstSix($first_six)
    {
        $this->first_six = $first_six;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstSix()
    {
        return $this->first_six;
    }

    /**
     * @param string $ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * @param string $ip_address_country
     *
     * @return $this
     */
    public function setIpAddressCountry($ip_address_country)
    {
        $this->ip_address_country = $ip_address_country;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddressCountry()
    {
        return $this->ip_address_country;
    }

    /**
     * @param string $last_four
     *
     * @return $this
     */
    public function setLastFour($last_four)
    {
        $this->last_four = $last_four;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastFour()
    {
        return $this->last_four;
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
     * @param int $month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
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

    /**
     * @param string $verification_value
     *
     * @return $this
     */
    public function setVerificationValue($verification_value)
    {
        $this->verification_value = $verification_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerificationValue()
    {
        return $this->verification_value;
    }

    /**
     * @param int $year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }


}