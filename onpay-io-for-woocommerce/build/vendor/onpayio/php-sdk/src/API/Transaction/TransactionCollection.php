<?php

namespace WoocommerceOnpay\OnPay\API\Transaction;

use WoocommerceOnpay\OnPay\API\Util\Pagination;
class TransactionCollection
{
    /**
     * @var SimpleTransaction[]
     */
    public $transactions;
    /**
     * @var Pagination
     */
    public $pagination;
}
