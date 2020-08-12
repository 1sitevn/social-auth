<?php


namespace OneSite\SocialAuth;


use Sonata\GoogleAuthenticator\GoogleAuthenticator;
use Sonata\GoogleAuthenticator\GoogleQrUrl;

/**
 * Class GoogleTwoFactorAuth
 * @package OneSite\SocialAuth
 */
class GoogleTwoFactorAuth implements SocialAuthInterface
{

    /**
     * @param array $params
     * @return mixed|string
     */
    public function getUrl($params = [])
    {
        $username = !empty($params['username']) ? $params['username'] : '';
        $secret = !empty($params['secret']) ? $params['secret'] : '';

        return GoogleQrUrl::generate($username, $secret);
    }

    /**
     * @param null $data
     * @return mixed|void
     */
    public function verify($data = null)
    {
        $google = new GoogleAuthenticator();

        $code = !empty($data['code']) ? $data['code'] : '';
        $secret = !empty($data['secret']) ? $data['secret'] : '';

        return $google->checkCode($secret, $code);
    }

}
