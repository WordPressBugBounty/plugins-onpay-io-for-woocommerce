<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Subscription;

use WoocommerceOnpay\OnPay\API\Util\Pagination;
final class SubscriptionCollection
{
    /**
     * @var SimpleSubscription[]
     */
    public array $subscriptions = [];
    public ?Pagination $pagination = null;
}
