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
        return $this->_get(
            'coupons',
            'array<Recurly\Model\Coupon>'
        );
    }

    /**
     * Gets a specified account
     *
     * @param $id
     *
     * @return Coupon
     */
    public function get($id)
    {
        return $this->_get(
            sprintf('coupons/%s', $id),
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
        return $this->_post(
            'coupons',
            $coupon
        );
    }
} 