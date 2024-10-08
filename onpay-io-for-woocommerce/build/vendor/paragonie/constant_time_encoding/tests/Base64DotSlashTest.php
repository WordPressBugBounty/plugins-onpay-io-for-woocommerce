<?php

namespace WoocommerceOnpay;

use WoocommerceOnpay\ParagonIE\ConstantTime\Base64DotSlash;
class Base64DotSlashTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Base64DotSlash::encode()
     * @covers Base64DotSlash::decode()
     */
    public function testRandom()
    {
        for ($i = 1; $i < 32; ++$i) {
            for ($j = 0; $j < 50; ++$j) {
                $random = \random_bytes($i);
                $enc = Base64DotSlash::encode($random);
                $this->assertSame($random, Base64DotSlash::decode($enc));
            }
        }
    }
}
