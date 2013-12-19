<?php

namespace Recurly;

use Recurly\Resource\Accounts;
use Recurly\Resource\Coupons;
use Recurly\Resource\Js;
use Recurly\Resource\Subscriptions;
use Recurly\Util\Client;

/**
 * Class Recurly
 * @package Recurly
 *
 * Sets stuff up, gets things done
 */
class Recurly
{
    /** @var Accounts */
    public $accounts;
    /** @var Coupons */
    public $coupons;
    /** @var Js */
    public $js;
    /** @var Subscriptions */
    public $subscriptions;

    /**
     * Sets up the library's dependencies
     * Creates the public resources
     *
     * @param string $subdomain
     * @param string $apiKey
     * @param string $privateKey
     */
    public function __construct($subdomain, $apiKey, $privateKey = null)
    {
        $client = new Client($subdomain, $apiKey);

        $this->accounts      = new Accounts($client);
        $this->coupons       = new Coupons($client);
        $this->js            = new Js($client, $privateKey);
        $this->subscriptions = new Subscriptions($client);
    }

} 