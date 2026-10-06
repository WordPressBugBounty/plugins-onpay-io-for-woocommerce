<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Gateway;

use WoocommerceOnpay\OnPay\API\Util\DataReader;
final class SimplePaymentWindowDesign
{
    /**
     * @internal Shall not be used outside the library
     * SimpleTransaction constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->name = DataReader::stringOrNull($data, 'name');
    }
    public ?string $name = null;
}
