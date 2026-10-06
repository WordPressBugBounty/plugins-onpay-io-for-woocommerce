<?php

declare (strict_types=1);
namespace WoocommerceOnpay\OnPay\API\Transaction;

use WoocommerceOnpay\OnPay\API\Util\Pagination;
final class TransactionCollection
{
    /**
     * @var SimpleTransaction[]
     */
    public array $transactions = [];
    public ?Pagination $pagination = null;
}
