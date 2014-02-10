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
     * If a context is given, deserializes the response
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
     * @param string         $returnContext
     *
     * @return mixed
     */
    protected function apiPost($suffix, ModelInterface $model, $returnContext = null)
    {
        $xml = $this->serializer->serialize($model);
        $response = $this->client->post($suffix, $xml);

        if (null !== $returnContext) {
            return $this->serializer->deserialize($response, $returnContext);
        }

        return true;
    }

    /**
     * Puts to the suffix
     * If a context is given, deserializes the response
     *
     * @param string         $suffix
     * @param ModelInterface $data
     * @param string         $returnContext
     *
     * @return mixed
     */
    protected function apiPut($suffix, ModelInterface $data = null, $returnContext = null)
    {
        if (null !== $data) {
            $data = $this->serializer->serialize($data);
        }

        $response = $this->client->put($suffix, $data);

        if (null !== $returnContext) {
            return $this->serializer->deserialize($response, $returnContext);
        }

        return true;
    }
} 