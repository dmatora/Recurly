<?php

namespace Recurly\Resource;

use Recurly\Model\Coupon;

class Coupons extends Resource
{

    /**
     * Gets all accounts
     *
     * @return Coupon[]
     */
    public function getAll()
    {
        return $this->apiGet(
            'coupons',
            'array<Recurly\Model\Coupon>'
        );
    }

    /**
     * Gets a specified account
     *
     * @param $couponCode
     *
     * @return Coupon
     */
    public function get($couponCode)
    {
        return $this->apiGet(
            sprintf('coupons/%s', $couponCode),
            'Recurly\Model\Coupon'
        );
    }

    /**
     * @param Coupon $coupon
     *
     * @return bool
     */
    public function create(Coupon $coupon)
    {
        return $this->apiPost(
            'coupons',
            $coupon
        );
    }
} 