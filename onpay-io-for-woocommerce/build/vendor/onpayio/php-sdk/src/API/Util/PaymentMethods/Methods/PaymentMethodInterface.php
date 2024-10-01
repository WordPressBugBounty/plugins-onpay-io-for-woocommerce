<?php

namespace WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods;

use WoocommerceOnpay\OnPay\API\Util\Currency;
interface PaymentMethodInterface
{
    public function isAvailableForCurrency(Currency $currency);
    public function getCurrencies();
    public function getName();
}
