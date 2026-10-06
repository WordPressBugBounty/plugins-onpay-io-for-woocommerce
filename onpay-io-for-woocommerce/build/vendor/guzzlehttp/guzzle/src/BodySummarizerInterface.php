<?php

declare (strict_types=1);
namespace WoocommerceOnpay\GuzzleHttp;

use WoocommerceOnpay\Psr\Http\Message\MessageInterface;
interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
