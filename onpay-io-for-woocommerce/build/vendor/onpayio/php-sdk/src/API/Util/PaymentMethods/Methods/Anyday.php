<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods;

use WoocommerceOnpay\OnPay\API\Enum\PaymentMethod;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Enums\CurrencyCodes;
/**
 * @internal Internal use only
 */
final class Anyday extends PaymentMethodAbstract
{
    const CURRENCIES = [CurrencyCodes::DKK];
    /** @deprecated Use {@see Anyday::getMethod()} or {@see PaymentMethod::ANYDAY} instead. */
    const METHOD_NAME = PaymentMethod::ANYDAY->value;
    public function getMethod(): PaymentMethod
    {
        return PaymentMethod::ANYDAY;
    }
}
