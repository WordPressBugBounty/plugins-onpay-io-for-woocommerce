<?php

namespace WoocommerceOnpay\Http\Discovery\Strategy;

use WoocommerceOnpay\Psr\Http\Message\RequestFactoryInterface;
use WoocommerceOnpay\Psr\Http\Message\ResponseFactoryInterface;
use WoocommerceOnpay\Psr\Http\Message\ServerRequestFactoryInterface;
use WoocommerceOnpay\Psr\Http\Message\StreamFactoryInterface;
use WoocommerceOnpay\Psr\Http\Message\UploadedFileFactoryInterface;
use WoocommerceOnpay\Psr\Http\Message\UriFactoryInterface;
/**
 * @internal
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * Don't miss updating src/Composer/Plugin.php when adding a new supported class.
 */
final class CommonPsr17ClassesStrategy implements DiscoveryStrategy
{
    /**
     * @var array
     */
    private static $classes = [RequestFactoryInterface::class => ['WoocommerceOnpay\Phalcon\Http\Message\RequestFactory', 'WoocommerceOnpay\Nyholm\Psr7\Factory\Psr17Factory', 'WoocommerceOnpay\GuzzleHttp\Psr7\HttpFactory', 'WoocommerceOnpay\Http\Factory\Diactoros\RequestFactory', 'WoocommerceOnpay\Http\Factory\Guzzle\RequestFactory', 'WoocommerceOnpay\Http\Factory\Slim\RequestFactory', 'WoocommerceOnpay\Laminas\Diactoros\RequestFactory', 'WoocommerceOnpay\Slim\Psr7\Factory\RequestFactory', 'WoocommerceOnpay\HttpSoft\Message\RequestFactory'], ResponseFactoryInterface::class => ['WoocommerceOnpay\Phalcon\Http\Message\ResponseFactory', 'WoocommerceOnpay\Nyholm\Psr7\Factory\Psr17Factory', 'WoocommerceOnpay\GuzzleHttp\Psr7\HttpFactory', 'WoocommerceOnpay\Http\Factory\Diactoros\ResponseFactory', 'WoocommerceOnpay\Http\Factory\Guzzle\ResponseFactory', 'WoocommerceOnpay\Http\Factory\Slim\ResponseFactory', 'WoocommerceOnpay\Laminas\Diactoros\ResponseFactory', 'WoocommerceOnpay\Slim\Psr7\Factory\ResponseFactory', 'WoocommerceOnpay\HttpSoft\Message\ResponseFactory'], ServerRequestFactoryInterface::class => ['WoocommerceOnpay\Phalcon\Http\Message\ServerRequestFactory', 'WoocommerceOnpay\Nyholm\Psr7\Factory\Psr17Factory', 'WoocommerceOnpay\GuzzleHttp\Psr7\HttpFactory', 'WoocommerceOnpay\Http\Factory\Diactoros\ServerRequestFactory', 'WoocommerceOnpay\Http\Factory\Guzzle\ServerRequestFactory', 'WoocommerceOnpay\Http\Factory\Slim\ServerRequestFactory', 'WoocommerceOnpay\Laminas\Diactoros\ServerRequestFactory', 'WoocommerceOnpay\Slim\Psr7\Factory\ServerRequestFactory', 'WoocommerceOnpay\HttpSoft\Message\ServerRequestFactory'], StreamFactoryInterface::class => ['WoocommerceOnpay\Phalcon\Http\Message\StreamFactory', 'WoocommerceOnpay\Nyholm\Psr7\Factory\Psr17Factory', 'WoocommerceOnpay\GuzzleHttp\Psr7\HttpFactory', 'WoocommerceOnpay\Http\Factory\Diactoros\StreamFactory', 'WoocommerceOnpay\Http\Factory\Guzzle\StreamFactory', 'WoocommerceOnpay\Http\Factory\Slim\StreamFactory', 'WoocommerceOnpay\Laminas\Diactoros\StreamFactory', 'WoocommerceOnpay\Slim\Psr7\Factory\StreamFactory', 'WoocommerceOnpay\HttpSoft\Message\StreamFactory'], UploadedFileFactoryInterface::class => ['WoocommerceOnpay\Phalcon\Http\Message\UploadedFileFactory', 'WoocommerceOnpay\Nyholm\Psr7\Factory\Psr17Factory', 'WoocommerceOnpay\GuzzleHttp\Psr7\HttpFactory', 'WoocommerceOnpay\Http\Factory\Diactoros\UploadedFileFactory', 'WoocommerceOnpay\Http\Factory\Guzzle\UploadedFileFactory', 'WoocommerceOnpay\Http\Factory\Slim\UploadedFileFactory', 'WoocommerceOnpay\Laminas\Diactoros\UploadedFileFactory', 'WoocommerceOnpay\Slim\Psr7\Factory\UploadedFileFactory', 'WoocommerceOnpay\HttpSoft\Message\UploadedFileFactory'], UriFactoryInterface::class => ['WoocommerceOnpay\Phalcon\Http\Message\UriFactory', 'WoocommerceOnpay\Nyholm\Psr7\Factory\Psr17Factory', 'WoocommerceOnpay\GuzzleHttp\Psr7\HttpFactory', 'WoocommerceOnpay\Http\Factory\Diactoros\UriFactory', 'WoocommerceOnpay\Http\Factory\Guzzle\UriFactory', 'WoocommerceOnpay\Http\Factory\Slim\UriFactory', 'WoocommerceOnpay\Laminas\Diactoros\UriFactory', 'WoocommerceOnpay\Slim\Psr7\Factory\UriFactory', 'WoocommerceOnpay\HttpSoft\Message\UriFactory']];
    public static function getCandidates($type)
    {
        $candidates = [];
        if (isset(self::$classes[$type])) {
            foreach (self::$classes[$type] as $class) {
                $candidates[] = ['class' => $class, 'condition' => [$class]];
            }
        }
        return $candidates;
    }
}
