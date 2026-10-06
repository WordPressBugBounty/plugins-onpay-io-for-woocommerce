<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Gateway;

use WoocommerceOnpay\OnPay\API\Util\DataReader;
final class Information
{
    /**
     * @internal Shall not be used outside the library
     * SimpleTransaction constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->gatewayId = DataReader::requireString($data, 'gateway_id');
    }
    public string $gatewayId;
}
