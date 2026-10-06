<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\Http;

use WoocommerceOnpay\Psr\Http\Client\ClientInterface;
use WoocommerceOnpay\Psr\Http\Message\RequestInterface;
use WoocommerceOnpay\Psr\Http\Message\ResponseInterface;
/**
 * A PSR-18 client that records the last request/response it handled.
 *
 * OnPayAPI reads these to power the public getLastHttpRequest()/getLastHttpResponse()
 * debug API, so any client plugged into OnPayAPI must expose them.
 *
 * @internal Shall not be used outside the library.
 */
interface RecordingHttpClientInterface extends ClientInterface
{
    public function getLastRequest(): ?RequestInterface;
    public function getLastResponse(): ?ResponseInterface;
}
