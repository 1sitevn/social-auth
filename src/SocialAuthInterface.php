<?php


namespace OneSite\SocialAuth;


/**
 * Interface SocialAuthInterface
 * @package OneSite\SocialAuth
 */
interface SocialAuthInterface
{

    /**
     * @param array $params
     * @return mixed
     */
    public function getUrl($params = []);

    /**
     * @param null $data
     * @return mixed
     */
    public function verify($data = null);
}
