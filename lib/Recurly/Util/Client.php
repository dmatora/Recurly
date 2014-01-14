<?php

namespace Recurly\Util;

use Recurly\Exception as Exc;

/**
 * Class Client
 * @package Recurly\Util
 *
 * Does the interacting with the Recurly API
 */
class Client
{
    const GET    = 'GET';
    const POST   = 'POST';
    const PUT    = 'PUT';
    const DELETE = 'DELETE';

    /** @var string */
    protected $subdomain;
    /** @var string */
    protected $apiKey;
    /** @var array */
    protected $headers;
    /** @var string */
    protected $response;
    /** @var integer */
    protected $responseCode;

    public function __construct($subdomain, $apiKey)
    {
        $this->subdomain = $subdomain;
        $this->apiKey    = $apiKey;
        $this->headers   = []; // init as empty array
    }

    /**
     * Does GET
     *
     * @param $suffix
     *
     * @return string
     */
    public function get($suffix)
    {
        return $this->call(self::GET, $suffix);
    }

    /**
     * Does POST
     *
     * @param $suffix
     * @param $data
     *
     * @return string
     */
    public function post($suffix, $data)
    {
        return $this->call(self::POST, $suffix, $data);
    }

    /**
     * Does PUT
     *
     * @param $suffix
     *
     * @return string
     */
    public function put($suffix)
    {
        $this->setHeaders([
            'Content-Length' => 0,
        ]);
        return $this->call(self::PUT, $suffix);
    }

    /**
     * Does curl request to Recurly API
     *
     * @param string $verb
     * @param string $suffix
     * @param string $data
     *
     * @return string
     */
    public function call($verb, $suffix, $data = null)
    {
        $url = sprintf('https://%s.recurly.com/v2/%s', $this->subdomain, $suffix);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Do verb specific shtuff
        switch ($verb) {
            case self::POST:
                curl_setopt($ch, CURLOPT_POST, true);
                break;
            case self::DELETE:
            case self::PUT:
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $verb);
                break;
        }

        // Set the data if provided
        if (null !== $data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        // set the headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeaders());
        // get response and close handle
        $this->response     = curl_exec($ch);
        $this->responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $this->verifyResponseCode();

        return $this->response;
    }

    /**
     * Allows to set custom headers
     * or override defaults
     *
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Gets the headers for the request
     * Sets some defaults
     *
     * @return array
     */
    protected function getHeaders()
    {
        // Set some default headers. Using += won't override already set headers.
        $this->headers += [
            'Content-Type'  => 'application/xml; charset=utf-8',
            'Accept'        => 'application/xml',
            'Authorization' => sprintf('Basic %s', base64_encode($this->apiKey)),
        ];

        $headers = [];
        foreach ($this->headers as $header => $value) {
            $headers[] = $header . ': ' . $value;
        }
        return $headers;
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Checks the response code if it's not an error
     * If so, throws a specific exception
     *
     * @throws \Exception
     * @return true
     */
    protected function verifyResponseCode()
    {
        if ($this->responseCode <= 299) {
            return true;
        } else {
            $element = simplexml_load_string($this->response);
            $error   = (string)$element->description;
            switch ($this->responseCode) {
                case 400:
                    throw new Exc\BadRequestException($error, $this->responseCode);
                    break;
                case 401:
                    throw new Exc\UnauthorizedException($error, $this->responseCode);
                    break;
                case 402:
                    throw new Exc\PaymentRequiredException($error, $this->responseCode);
                    break;
                case 403:
                    throw new Exc\ForbiddenException($error, $this->responseCode);
                    break;
                case 404:
                    throw new Exc\NotFoundException($error, $this->responseCode);
                    break;
                case 405:
                    throw new Exc\MethodNotAllowedException($error, $this->responseCode);
                    break;
                case 406:
                    throw new Exc\NotAcceptableException($error, $this->responseCode);
                    break;
                case 412:
                    throw new Exc\PreconditionFailedException($error, $this->responseCode);
                    break;
                case 422:
                    throw new Exc\UnprocessableEntityException($error, $this->responseCode);
                    break;
                case 429:
                    throw new Exc\TooManyRequestsException($error, $this->responseCode);
                    break;
                case 500:
                    throw new Exc\InternalServerException($error, $this->responseCode);
                    break;
                case 502:
                    throw new Exc\GatewayException($error, $this->responseCode);
                    break;
                case 503:
                    throw new Exc\ServiceUnavailableException($error, $this->responseCode);
                    break;
                default:
                    if ($this->responseCode >= 500) {
                        throw new Exc\ServerException($error, $this->responseCode);
                    } else {
                        if ($this->responseCode >= 400) {
                            throw new Exc\ClientException($error, $this->responseCode);
                        } else {
                            throw new \RuntimeException('Unexpected response code');
                        }
                    }
            }
        }
    }

}