<?php

namespace AppTest;

use Mockery as m;

/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testCallingExternalService()
    {
        $param = 'Testing';

        $externalMock = m::mock('overload:App\Service\External');
        $externalMock->shouldReceive('sendSomething')
            ->set('bar', 'foo')
            ->once()
            ->with($param);
        $externalMock->shouldReceive('getSomething')
            ->once()
            ->andReturn('Tested!');

        $service = new \App\Service();

        $result = $service->callExternalService($param);

        $this->assertSame('Tested!', $result);
        $this->assertSame('foo', $externalMock->bar);
        $this->assertSame('foo', $service->externalService->bar);
    }
}
