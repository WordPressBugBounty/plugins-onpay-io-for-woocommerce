<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a33012d51c3eb8e64b86f431203b49c
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WoocommerceOnpay\\fkooman\\OAuth\\Client\\' => 38,
            'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\' => 39,
            'WoocommerceOnpay\\Symfony\\Polyfill\\Php56\\' => 40,
            'WoocommerceOnpay\\Psr\\Log\\' => 25,
            'WoocommerceOnpay\\ParagonIE\\ConstantTime\\' => 40,
            'WoocommerceOnpay\\OnPay\\' => 23,
            'WoocommerceOnpay\\League\\ISO3166\\' => 32,
            'WoocommerceOnpay\\Alcohol\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/onpayio/oauth2-client/src',
        ),
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'WoocommerceOnpay\\Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'WoocommerceOnpay\\Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'WoocommerceOnpay\\OnPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/onpayio/php-sdk/src',
        ),
        'WoocommerceOnpay\\League\\ISO3166\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/iso3166/src',
        ),
        'WoocommerceOnpay\\Alcohol\\' => 
        array (
            0 => __DIR__ . '/..' . '/alcohol/iso4217',
        ),
    );

    public static $classMap = array (
        'WoocommerceOnpay\\Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WoocommerceOnpay\\Alcohol\\ISO4217' => __DIR__ . '/..' . '/alcohol/iso4217/ISO4217.php',
        'WoocommerceOnpay\\Alcohol\\ISO4217Test' => __DIR__ . '/..' . '/alcohol/iso4217/ISO4217Test.php',
        'WoocommerceOnpay\\League\\ISO3166\\Exception\\DomainException' => __DIR__ . '/..' . '/league/iso3166/src/Exception/DomainException.php',
        'WoocommerceOnpay\\League\\ISO3166\\Exception\\ISO3166Exception' => __DIR__ . '/..' . '/league/iso3166/src/Exception/ISO3166Exception.php',
        'WoocommerceOnpay\\League\\ISO3166\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/league/iso3166/src/Exception/OutOfBoundsException.php',
        'WoocommerceOnpay\\League\\ISO3166\\Guards' => __DIR__ . '/..' . '/league/iso3166/src/Guards.php',
        'WoocommerceOnpay\\League\\ISO3166\\ISO3166' => __DIR__ . '/..' . '/league/iso3166/src/ISO3166.php',
        'WoocommerceOnpay\\League\\ISO3166\\ISO3166DataProvider' => __DIR__ . '/..' . '/league/iso3166/src/ISO3166DataProvider.php',
        'WoocommerceOnpay\\League\\ISO3166\\ISO3166DataValidator' => __DIR__ . '/..' . '/league/iso3166/src/ISO3166DataValidator.php',
        'WoocommerceOnpay\\League\\ISO3166\\ISO3166WithAliases' => __DIR__ . '/..' . '/league/iso3166/src/ISO3166WithAliases.php',
        'WoocommerceOnpay\\OnPay\\API\\Exception\\ApiException' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Exception/ApiException.php',
        'WoocommerceOnpay\\OnPay\\API\\Exception\\ConnectionException' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Exception/ConnectionException.php',
        'WoocommerceOnpay\\OnPay\\API\\Exception\\InvalidCartException' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Exception/InvalidCartException.php',
        'WoocommerceOnpay\\OnPay\\API\\Exception\\InvalidFormatException' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Exception/InvalidFormatException.php',
        'WoocommerceOnpay\\OnPay\\API\\Exception\\MissingDataException' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Exception/MissingDataException.php',
        'WoocommerceOnpay\\OnPay\\API\\Exception\\TokenException' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Exception/TokenException.php',
        'WoocommerceOnpay\\OnPay\\API\\GatewayService' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/GatewayService.php',
        'WoocommerceOnpay\\OnPay\\API\\Gateway\\Information' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Gateway/Information.php',
        'WoocommerceOnpay\\OnPay\\API\\Gateway\\PaymentWindowDesignCollection' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Gateway/PaymentWindowDesignCollection.php',
        'WoocommerceOnpay\\OnPay\\API\\Gateway\\PaymentWindowIntegrationSettings' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Gateway/PaymentWindowIntegrationSettings.php',
        'WoocommerceOnpay\\OnPay\\API\\Gateway\\SimplePaymentWindowDesign' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Gateway/SimplePaymentWindowDesign.php',
        'WoocommerceOnpay\\OnPay\\API\\Http\\Request' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Http/Request.php',
        'WoocommerceOnpay\\OnPay\\API\\Http\\Response' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Http/Response.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentService' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentService.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentWindow' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentWindow.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentWindow\\Cart' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentWindow/Cart.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentWindow\\CartHandling' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentWindow/CartHandling.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentWindow\\CartItem' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentWindow/CartItem.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentWindow\\CartShipping' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentWindow/CartShipping.php',
        'WoocommerceOnpay\\OnPay\\API\\PaymentWindow\\PaymentInfo' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/PaymentWindow/PaymentInfo.php',
        'WoocommerceOnpay\\OnPay\\API\\Payment\\SimplePayment' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Payment/SimplePayment.php',
        'WoocommerceOnpay\\OnPay\\API\\SubscriptionService' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/SubscriptionService.php',
        'WoocommerceOnpay\\OnPay\\API\\Subscription\\DetailedSubscription' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Subscription/DetailedSubscription.php',
        'WoocommerceOnpay\\OnPay\\API\\Subscription\\SimpleSubscription' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Subscription/SimpleSubscription.php',
        'WoocommerceOnpay\\OnPay\\API\\Subscription\\SubscriptionCollection' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Subscription/SubscriptionCollection.php',
        'WoocommerceOnpay\\OnPay\\API\\Subscription\\SubscriptionHistory' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Subscription/SubscriptionHistory.php',
        'WoocommerceOnpay\\OnPay\\API\\TransactionService' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/TransactionService.php',
        'WoocommerceOnpay\\OnPay\\API\\Transaction\\CardholderData' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Transaction/CardholderData.php',
        'WoocommerceOnpay\\OnPay\\API\\Transaction\\DetailedTransaction' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Transaction/DetailedTransaction.php',
        'WoocommerceOnpay\\OnPay\\API\\Transaction\\SimpleTransaction' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Transaction/SimpleTransaction.php',
        'WoocommerceOnpay\\OnPay\\API\\Transaction\\TransactionCollection' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Transaction/TransactionCollection.php',
        'WoocommerceOnpay\\OnPay\\API\\Transaction\\TransactionHistory' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Transaction/TransactionHistory.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\Converter' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/Converter.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\Currencies' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/Currencies.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\Currency' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/Currency.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\Link' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/Link.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\Pagination' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/Pagination.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Enums\\CurrencyCodes' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Enums/CurrencyCodes.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Enums\\Methods' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Enums/Methods.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\Anyday' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/Anyday.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\ApplePay' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/ApplePay.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\Card' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/Card.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\GooglePay' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/GooglePay.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\Klarna' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/Klarna.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\MobilePay' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/MobilePay.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\MobilePayCheckout' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/MobilePayCheckout.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\PayPal' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/PayPal.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\PaymentMethodAbstract' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/PaymentMethodAbstract.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\PaymentMethodInterface' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/PaymentMethodInterface.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\Swish' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/Swish.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\ViaBill' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/ViaBill.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\Methods\\Vipps' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/Methods/Vipps.php',
        'WoocommerceOnpay\\OnPay\\API\\Util\\PaymentMethods\\PaymentMethods' => __DIR__ . '/..' . '/onpayio/php-sdk/src/API/Util/PaymentMethods/PaymentMethods.php',
        'WoocommerceOnpay\\OnPay\\CurlHttpClientLogger' => __DIR__ . '/..' . '/onpayio/php-sdk/src/CurlHttpClientLogger.php',
        'WoocommerceOnpay\\OnPay\\InternalTokenStorage' => __DIR__ . '/..' . '/onpayio/php-sdk/src/InternalTokenStorage.php',
        'WoocommerceOnpay\\OnPay\\OAuth\\Client\\OAuthClient' => __DIR__ . '/..' . '/onpayio/php-sdk/src/OAuth/Client/OAuthClient.php',
        'WoocommerceOnpay\\OnPay\\OnPayAPI' => __DIR__ . '/..' . '/onpayio/php-sdk/src/OnPayAPI.php',
        'WoocommerceOnpay\\OnPay\\Session' => __DIR__ . '/..' . '/onpayio/php-sdk/src/Session.php',
        'WoocommerceOnpay\\OnPay\\StaticToken' => __DIR__ . '/..' . '/onpayio/php-sdk/src/StaticToken.php',
        'WoocommerceOnpay\\OnPay\\TokenStorageInterface' => __DIR__ . '/..' . '/onpayio/php-sdk/src/TokenStorageInterface.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Base32' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Base32.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Base32Hex' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Base32Hex.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Base64' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Base64.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Base64DotSlash' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Base64DotSlash.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Base64DotSlashOrdered' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Base64DotSlashOrdered.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Base64UrlSafe' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Base64UrlSafe.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Binary' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Binary.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\EncoderInterface' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/EncoderInterface.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Encoding' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Encoding.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\Hex' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/Hex.php',
        'WoocommerceOnpay\\ParagonIE\\ConstantTime\\RFC4648' => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src/RFC4648.php',
        'WoocommerceOnpay\\Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'WoocommerceOnpay\\Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'WoocommerceOnpay\\Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'WoocommerceOnpay\\Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'WoocommerceOnpay\\Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'WoocommerceOnpay\\Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'WoocommerceOnpay\\Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'WoocommerceOnpay\\Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'WoocommerceOnpay\\Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'WoocommerceOnpay\\Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'WoocommerceOnpay\\Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Php56\\Php56' => __DIR__ . '/..' . '/symfony/polyfill-php56/Php56.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\Binary' => __DIR__ . '/..' . '/symfony/polyfill-util/Binary.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\BinaryNoFuncOverload' => __DIR__ . '/..' . '/symfony/polyfill-util/BinaryNoFuncOverload.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\BinaryOnFuncOverload' => __DIR__ . '/..' . '/symfony/polyfill-util/BinaryOnFuncOverload.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\TestListener' => __DIR__ . '/..' . '/symfony/polyfill-util/TestListener.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\TestListenerForV5' => __DIR__ . '/..' . '/symfony/polyfill-util/TestListenerForV5.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\TestListenerForV6' => __DIR__ . '/..' . '/symfony/polyfill-util/TestListenerForV6.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\TestListenerForV7' => __DIR__ . '/..' . '/symfony/polyfill-util/TestListenerForV7.php',
        'WoocommerceOnpay\\Symfony\\Polyfill\\Util\\TestListenerTrait' => __DIR__ . '/..' . '/symfony/polyfill-util/TestListenerTrait.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\AccessToken' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/AccessToken.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\ErrorLogger' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/ErrorLogger.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Exception\\AccessTokenException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Exception/AccessTokenException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Exception\\AuthorizeException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Exception/AuthorizeException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Exception\\JsonException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Exception/JsonException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Exception\\OAuthException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Exception/OAuthException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Exception\\SessionException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Exception/SessionException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Exception\\TokenException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Exception/TokenException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Http\\CurlHttpClient' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Http/CurlHttpClient.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Http\\Exception\\CurlException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Http/Exception/CurlException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Http\\Exception\\ResponseException' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Http/Exception/ResponseException.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Http\\HttpClientInterface' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Http/HttpClientInterface.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Http\\Request' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Http/Request.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Http\\Response' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Http/Response.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Json' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Json.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\OAuthClient' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/OAuthClient.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\PdoTokenStorage' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/PdoTokenStorage.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Provider' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Provider.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Random' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Random.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\RandomInterface' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/RandomInterface.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\Session' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/Session.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\SessionInterface' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/SessionInterface.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\SessionTokenStorage' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/SessionTokenStorage.php',
        'WoocommerceOnpay\\fkooman\\OAuth\\Client\\TokenStorageInterface' => __DIR__ . '/..' . '/onpayio/oauth2-client/src/TokenStorageInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a33012d51c3eb8e64b86f431203b49c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a33012d51c3eb8e64b86f431203b49c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a33012d51c3eb8e64b86f431203b49c::$classMap;

        }, null, ClassLoader::class);
    }
}
