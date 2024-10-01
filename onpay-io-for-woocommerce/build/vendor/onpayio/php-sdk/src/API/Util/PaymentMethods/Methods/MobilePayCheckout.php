<?php

namespace WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods;

use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\CurrencyCodes;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\Methods;
/**
 * @internal Internal use only
 */
final class MobilePayCheckout extends PaymentMethodAbstract
{
    const CURRENCIES = [CurrencyCodes::DKK, CurrencyCodes::NOK, CurrencyCodes::SEK, CurrencyCodes::GBP, CurrencyCodes::USD, CurrencyCodes::EUR];
    const METHOD_NAME = Methods::MOBILEPAY_CHECKOUT;
}
