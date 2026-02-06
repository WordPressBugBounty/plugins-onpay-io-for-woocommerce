<?php

namespace WoocommerceOnpay\Tests\Unit;

use WoocommerceOnpay\OnPay\OnPayAPI;
use WoocommerceOnpay\OnPay\TokenStorageInterface;
use WoocommerceOnpay\PHPUnit\Framework\MockObject\Exception;
use WoocommerceOnpay\PHPUnit\Framework\TestCase;
class OnPayApiTest extends TestCase
{
    /** @throws Exception */
    public function testInitializeThrowsOnMissingRequiredParameterClientId(): void
    {
        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage->method('getToken')->willReturn('test_token');
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Required options not defined: client_id');
        new OnPayAPI($tokenStorage, ['redirect_uri' => 'test_uri']);
    }
    /** @throws Exception */
    public function testInitializeThrowsOnMissingRequiredParameterRedirectUri(): void
    {
        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage->method('getToken')->willReturn('test_token');
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Required options not defined: redirect_uri');
        new OnPayAPI($tokenStorage, ['client_id' => 'test_id']);
    }
    /** @throws Exception */
    public function testInitializeApi(): void
    {
        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage->method('getToken')->willReturn('test_token');
        $this->expectNotToPerformAssertions();
        new OnPayAPI($tokenStorage, ['client_id' => 'test_id', 'redirect_uri' => 'test_uri']);
    }
}
