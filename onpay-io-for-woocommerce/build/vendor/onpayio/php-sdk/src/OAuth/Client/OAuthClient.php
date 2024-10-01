<?php

namespace WoocommerceOnpay\OnPay\OAuth\Client;

use WoocommerceOnpay\fkooman\OAuth\Client\SessionInterface;
class OAuthClient extends \WoocommerceOnpay\fkooman\OAuth\Client\OAuthClient
{
    /**
     * @return void
     */
    public function setSession(SessionInterface $session)
    {
        // This method was removed in version 7.2.0 of fkooman/oauthclient
        if (\method_exists(\get_parent_class($this), 'setSession')) {
            parent::setSession($session);
            return;
        }
        $this->session = $session;
    }
}
