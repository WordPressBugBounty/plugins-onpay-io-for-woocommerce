<?php

namespace WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods;

use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\CurrencyCodes;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\Methods;
/**
 * @internal Internal use only
 */
final class GooglePay extends PaymentMethodAbstract
{
    const CURRENCIES = [CurrencyCodes::ALL_CURRENCY_CODES];
    const METHOD_NAME = Methods::GOOGLE_PAY;
}
