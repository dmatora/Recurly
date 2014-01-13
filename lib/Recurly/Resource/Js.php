<?php

namespace Recurly\Resource;

use Recurly\Util\Client;
use Recurly\Util\Hasher;

class Js extends Resource
{
    /** @var string */
    protected $privateKey;

    public function __construct(Client $client, $privateKey)
    {
        parent::__construct($client);
        $this->privateKey = $privateKey;
    }

    /**
     * Creates a signature string for use with recurly.js
     *
     * @param array $data
     *
     * @throws \InvalidArgumentException
     * @return string
     */
    public function sign(array $data)
    {
        if (null === $this->privateKey) {
            throw new \InvalidArgumentException('No privateKey set');
        }

        $data += [
            'nonce'     => md5(uniqid()),
            'timestamp' => time(),
        ];

        $query = http_build_query($data);
        return Hasher::hash($query, $this->privateKey) . '|' . $query;
    }

    /**
     * Retreives the transaction result of the specified token
     *
     * @param string $token
     * @param string $type
     *
     * @throws \InvalidArgumentException
     * @return \Recurly\Model\Subscription
     */
    public function fetch($token, $type)
    {
        $suffix  = sprintf('recurly_js/result/%s', $token);
        switch ($type) {
            case 'subscription':
                $context = 'Recurly\Model\Subscription';
                break;
            default:
                throw new \InvalidArgumentException('Type not supported');
        }

        return $this->apiGet($suffix, $context);
    }
} 