<?php

namespace Kraken\_Unit\Runtime\Command;

use Kraken\_Unit\Runtime\_T\TSolver;
use Kraken\Runtime\Supervision\Runtime\RuntimeStop;
use Kraken\Throwable\Exception\Logic\IllegalCallException;
use Exception;
use StdClass;

class RuntimeStopTest extends TSolver
{
    /**
     * @var string
     */
    protected $class = RuntimeStop::class;

    /**
     *
     */
    public function testApisolver_InvokesProperAction()
    {
        $ex = new Exception();

        $origin  = 'origin';
        $result = new StdClass;

        $solver  = $this->createSolver();
        $manager = $this->createManager();
        $manager
            ->expects($this->once())
            ->method('stopRuntime')
            ->with($origin)
            ->will($this->returnValue($result));

        $this->assertSame(
            $result,
            $this->callProtectedMethod(
                $solver, 'solver', [ $ex, [ 'origin' => $origin ] ]
            )
        );
    }

    /**
     *
     */
    public function testApisolve_ThrowsException_WhenParamOriginDoesNotExist()
    {
        $solver = $this->createSolver();

        $callable = $this->createCallableMock();
        $callable
            ->expects($this->once())
            ->method('__invoke')
            ->with($this->isInstanceOf(IllegalCallException::class));

        $solver
            ->solve(new Exception, [])
            ->then(
                null,
                $callable
            );
    }
}
