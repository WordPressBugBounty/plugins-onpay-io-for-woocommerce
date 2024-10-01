<?php

namespace WoocommerceOnpay\OnPay\API\Subscription;

use WoocommerceOnpay\OnPay\API\Util\Pagination;
class SubscriptionCollection
{
    /**
     * @var SimpleSubscription[]
     */
    public $subscriptions = [];
    /**
     * @var Pagination
     */
    public $pagination;
}
