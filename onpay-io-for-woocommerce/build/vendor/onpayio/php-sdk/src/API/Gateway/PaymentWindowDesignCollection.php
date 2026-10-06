<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Gateway;

use WoocommerceOnpay\OnPay\API\Gateway\SimplePaymentWindowDesign;
final class PaymentWindowDesignCollection
{
    /**
     * @var SimplePaymentWindowDesign[]
     */
    public array $paymentWindowDesigns = [];
}
