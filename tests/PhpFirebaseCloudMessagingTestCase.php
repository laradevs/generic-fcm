<?php
namespace LaraDevs\PhpFirebaseCloudMessaging\Tests;

class PhpFirebaseCloudMessagingTestCase extends \PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
        \Mockery::close();
        parent::tearDown();
    }
}