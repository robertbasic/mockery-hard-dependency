<?php

namespace AppTest;

class ExternalTest extends \PHPUnit_Framework_TestCase
{
    public function testGettingSomething()
    {
        $externalService = new \App\Service\External();

        $result = $externalService->getSomething();

        $this->assertSame('Just a return', $result);
    }
}
