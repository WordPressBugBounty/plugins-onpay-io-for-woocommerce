<?php

namespace WoocommerceOnpay;

use WoocommerceOnpay\ParagonIE\ConstantTime\Base32Hex;
class Base32HexTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Base32Hex::encode()
     * @covers Base32Hex::decode()
     * @covers Base32Hex::encodeUpper()
     * @covers Base32Hex::decodeUpper()
     */
    public function testRandom()
    {
        for ($i = 1; $i < 32; ++$i) {
            for ($j = 0; $j < 50; ++$j) {
                $random = \random_bytes($i);
                $enc = Base32Hex::encode($random);
                $this->assertSame($random, Base32Hex::decode($enc));
                $enc = Base32Hex::encodeUpper($random);
                $this->assertSame($random, Base32Hex::decodeUpper($enc));
            }
        }
    }
}
