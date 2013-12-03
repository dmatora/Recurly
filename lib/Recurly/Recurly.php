<?php

namespace Recurly;

use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Recurly\Resource\Account;
use Recurly\Util\Client;
use Recurly\Util\HandlerSubscriber;

/**
 * Class Recurly
 * @package Recurly
 *
 * Sets stuff up, gets things done
 */
class Recurly
{
    /** @var string */
    protected $subdomain;
    /** @var string */
    protected $apiKey;
    /** @var SerializerInterface */
    protected $serializer;

    /** @var Account */
    public $accounts;

    /**
     * Sets up the library's dependencies
     *
     * @param string $subdomain
     * @param string $apiKey
     */
    public function __construct($subdomain, $apiKey)
    {
        $client = new Client($subdomain, $apiKey);

        $builder = SerializerBuilder::create();
        $builder->configureHandlers(function(HandlerRegistry $registry) {
            $registry->registerSubscribingHandler(new HandlerSubscriber());
        });
        $serializer = $builder->build();

        $this->accounts = new Account($client, $serializer);
    }

} 