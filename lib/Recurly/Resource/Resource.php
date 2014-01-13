<?php

namespace Recurly\Resource;

use Recurly\Model\ModelInterface;
use Recurly\Util\Client;
use Recurly\Util\Serializer;

abstract class Resource
{
    /** @var Client */
    protected $client;
    /** @var Serializer */
    protected $serializer;

    public function __construct(Client $client)
    {
        $this->client     = $client;
        $this->serializer = new Serializer();
    }

    /**
     * Talks to the API and gets an XML response
     * If a context is given, deserializes the XML
     *
     * @param string $suffix
     * @param string $context
     *
     * @return mixed
     */
    protected function apiGet($suffix, $context = null)
    {
        $response = $this->client->get($suffix);

        if (null !== $context) {
            return $this->serializer->deserialize($response, $context);
        }
        
        return $response;
    }

    /**
     * Posts to the suffix with the model data
     *
     * @param string         $suffix
     * @param ModelInterface $model
     *
     * @return bool
     */
    protected function apiPost($suffix, ModelInterface $model)
    {
        $xml = $this->serializer->serialize($model);
        $this->client->post($suffix, $xml);
        return true;
    }
} 