<?php

namespace WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods;

use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\CurrencyCodes;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\Methods;
/**
 * @internal Internal use only
 */
final class Vipps extends PaymentMethodAbstract
{
    const CURRENCIES = [CurrencyCodes::NOK];
    const METHOD_NAME = Methods::VIPPS;
}
