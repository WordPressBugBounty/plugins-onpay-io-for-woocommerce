<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WoocommerceOnpay\Symfony\Polyfill\Util;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestListenerForV5 extends \WoocommerceOnpay\PHPUnit_Framework_TestSuite implements \WoocommerceOnpay\PHPUnit_Framework_TestListener
{
    private $suite;
    private $trait;
    public function __construct(\WoocommerceOnpay\PHPUnit_Framework_TestSuite $suite = null)
    {
        if ($suite) {
            $this->suite = $suite;
            $this->setName($suite->getName() . ' with polyfills enabled');
            $this->addTest($suite);
        }
        $this->trait = new TestListenerTrait();
    }
    public function startTestSuite(\WoocommerceOnpay\PHPUnit_Framework_TestSuite $suite)
    {
        $this->trait->startTestSuite($suite);
    }
    public function addError(\WoocommerceOnpay\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }
    public function addWarning(\WoocommerceOnpay\PHPUnit_Framework_Test $test, \WoocommerceOnpay\PHPUnit_Framework_Warning $e, $time)
    {
    }
    public function addFailure(\WoocommerceOnpay\PHPUnit_Framework_Test $test, \WoocommerceOnpay\PHPUnit_Framework_AssertionFailedError $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }
    public function addIncompleteTest(\WoocommerceOnpay\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    public function addRiskyTest(\WoocommerceOnpay\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    public function addSkippedTest(\WoocommerceOnpay\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    public function endTestSuite(\WoocommerceOnpay\PHPUnit_Framework_TestSuite $suite)
    {
    }
    public function startTest(\WoocommerceOnpay\PHPUnit_Framework_Test $test)
    {
    }
    public function endTest(\WoocommerceOnpay\PHPUnit_Framework_Test $test, $time)
    {
    }
    public static function warning($message)
    {
        return parent::warning($message);
    }
    protected function setUp()
    {
        TestListenerTrait::$enabledPolyfills = $this->suite->getName();
    }
    protected function tearDown()
    {
        TestListenerTrait::$enabledPolyfills = \false;
    }
}
