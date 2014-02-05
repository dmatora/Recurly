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
     * @param string         $context
     *
     * @return mixed
     */
    protected function apiPost($suffix, ModelInterface $model, $context = null)
    {
        $xml = $this->serializer->serialize($model);
        $response = $this->client->post($suffix, $xml);

        if (null !== $context) {
            return $this->serializer->deserialize($response, $context);
        }

        return true;
    }

    /**
     * Puts to the suffix
     *
     * @param string         $suffix
     * @param ModelInterface $data
     * @param string         $context
     *
     * @return mixed
     */
    protected function apiPut($suffix, ModelInterface $data = null, $context = null)
    {
        $response = $this->client->put($suffix, $data);

        if (null !== $context) {
            return $this->serializer->deserialize($response, $context);
        }

        return true;
    }
} 