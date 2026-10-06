<?php

declare (strict_types=1);
namespace WoocommerceOnpay\GuzzleHttp\Exception;

use WoocommerceOnpay\Psr\Http\Client\NetworkExceptionInterface;
use WoocommerceOnpay\Psr\Http\Message\RequestInterface;
/**
 * Base exception for transfer failures without a response.
 */
class NetworkException extends TransferException implements NetworkExceptionInterface
{
    public function __construct(string $message, RequestInterface $request, ?\Throwable $previous = null)
    {
        parent::__construct($message, $request, 0, $previous);
    }
}
