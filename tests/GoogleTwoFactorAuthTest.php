<?php


namespace OneSite\SocialAuth\Tests;


use OneSite\SocialAuth\GoogleTwoFactorAuth;
use PHPUnit\Framework\TestCase;


class GoogleTwoFactorAuthTest extends TestCase
{

    private $service;

    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->service = new GoogleTwoFactorAuth();
    }

    /**
     *
     */
    public function tearDown(): void
    {
        $this->service = null;

        parent::tearDown();
    }

    /**
     * PHPUnit test: vendor/bin/phpunit --filter=testGetUrl tests/GoogleTwoFactorAuthTest.php
     */
    public function testGetUrl()
    {
        $data = $this->service->getUrl([
            'username' => 'tungnt',
            'secret' => '5CILZ2MRXAR2P57S'
        ]);

        print_r($data);

        $this->assertTrue(true);
    }

    /**
     * PHPUnit test: vendor/bin/phpunit --filter=testVerify tests/GoogleTwoFactorAuthTest.php
     */
    public function testVerify()
    {
        $data = $this->service->verify([
            'code' => '541722',
            'secret' => '5CILZ2MRXAR2P57S'
        ]);

        var_dump($data);

        $this->assertTrue(true);
    }

}
