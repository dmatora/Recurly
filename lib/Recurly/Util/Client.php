<?php

namespace Recurly\Util;

/**
 * Class Client
 * @package Recurly\Util
 *
 * Does the interacting with the Recurly API
 */
class Client 
{
    const GET = 'get';

    /** @var string */
    protected $subdomain;
    /** @var string */
    protected $apiKey;
    /** @var string */
    protected $response;
    /** @var integer */
    protected $responseCode;

    public function __construct($subdomain, $apiKey)
    {
        $this->subdomain  = $subdomain;
        $this->apiKey     = $apiKey;
    }

    public function get($suffix)
    {
        return $this->call(self::GET, $suffix);
    }

    public function call($verb, $suffix, $options = [])
    {
        $url = sprintf('https://%s.recurly.com/v2/%s', $this->subdomain, $suffix);

        $headers[] = 'Content-Type: application/xml; charset=utf-8';
        $headers[] = 'Accept: application/xml';
        $headers[] = sprintf('Authorization: Basic %s', base64_encode($this->apiKey));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // set the headers
        if ($headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        // get response and close handle
        $this->response     = curl_exec($ch);
        $this->responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $this->response;
    }
}