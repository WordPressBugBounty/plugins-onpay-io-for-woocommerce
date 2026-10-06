<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Util\PaymentMethods;

use WoocommerceOnpay\OnPay\API\Enum\PaymentMethod;
use WoocommerceOnpay\OnPay\API\Exception\ApiException;
use WoocommerceOnpay\OnPay\API\Util\Currency;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\Anyday;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\ApplePay;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\Card;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\GooglePay;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\MobilePay;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\MobilePayCheckout;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\PaymentMethodInterface;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\PayPal;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\Klarna;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\Swish;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\ViaBill;
use WoocommerceOnpay\OnPay\API\Util\PaymentMethods\Methods\Vipps;
final class PaymentMethods
{
    /**
     * @var PaymentMethodInterface[]
     */
    private array $paymentMethods = [];
    /**
     * @throws ApiException
     */
    public function __construct()
    {
        $this->populatePaymentMethods();
    }
    /**
     * @return void
     * @throws ApiException
     */
    private function populatePaymentMethods(): void
    {
        $this->paymentMethods[] = new Anyday();
        $this->paymentMethods[] = new ApplePay();
        $this->paymentMethods[] = new Card();
        $this->paymentMethods[] = new GooglePay();
        $this->paymentMethods[] = new Klarna();
        $this->paymentMethods[] = new MobilePay();
        $this->paymentMethods[] = new MobilePayCheckout();
        $this->paymentMethods[] = new PayPal();
        $this->paymentMethods[] = new Swish();
        $this->paymentMethods[] = new ViaBill();
        $this->paymentMethods[] = new Vipps();
    }
    /**
     * @param string|PaymentMethod $method A {@see PaymentMethod} case, or a raw method
     *                                     identifier. An unknown identifier yields an
     *                                     empty array rather than an error.
     * @return Currency[]
     */
    public function getCurrenciesByMethod(string|PaymentMethod $method): array
    {
        $currencies = [];
        $methodName = $method instanceof PaymentMethod ? $method->value : $method;
        foreach ($this->paymentMethods as $paymentMethod) {
            if (strtolower($paymentMethod->getName()) === strtolower($methodName)) {
                $currencies = $paymentMethod->getCurrencies();
                break;
            }
        }
        return $currencies;
    }
    /**
     * @param Currency $currency
     * @return PaymentMethodInterface[]
     */
    public function getPaymentMethodsByCurrency(Currency $currency): array
    {
        $availableMethods = [];
        foreach ($this->paymentMethods as $paymentMethod) {
            if ($paymentMethod->isAvailableForCurrency($currency)) {
                $availableMethods[] = $paymentMethod;
            }
        }
        return $availableMethods;
    }
    /**
     * @return PaymentMethodInterface[]
     */
    public function getAllPaymentMethods(): array
    {
        return $this->paymentMethods;
    }
}
