<?php

namespace Recurly\Resource;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Recurly\Util\Client;

abstract class Resource
{
    /** @var Client */
    protected $client;
    /** @var SerializerInterface */
    protected $serializer;

    public function __construct(Client $client, SerializerInterface $serializer)
    {
        $this->client     = $client;
        $this->serializer = $serializer;

    }

    protected function _get($suffix, $context)
    {
        $xml = $this->client->get($suffix);

        return $this->serializer->deserialize($xml, $context, 'xml');
    }
} 