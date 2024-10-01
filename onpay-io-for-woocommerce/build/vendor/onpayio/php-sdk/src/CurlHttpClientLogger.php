<?php

namespace WoocommerceOnpay\OnPay;

use WoocommerceOnpay\fkooman\OAuth\Client\Http\CurlHttpClient;
use WoocommerceOnpay\fkooman\OAuth\Client\Http\Request;
use WoocommerceOnpay\fkooman\OAuth\Client\Http\Response;
class CurlHttpClientLogger extends CurlHttpClient
{
    /**
     * @var Request
     */
    protected $lastRequest;
    /**
     * @var Response
     */
    protected $lastResponse;
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function send(Request $request)
    {
        $this->lastRequest = $request;
        $response = parent::send($request);
        $this->lastResponse = $response;
        return $response;
    }
    /**
     * @return Request
     */
    public function getLastRequest()
    {
        return $this->lastRequest;
    }
    /**
     * @return Response
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }
}
