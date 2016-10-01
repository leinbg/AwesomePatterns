<?php

use AwesomePatterns\ChainOfResponsibility\IoChecker;
use AwesomePatterns\ChainOfResponsibility\CpuChecker;
use AwesomePatterns\ChainOfResponsibility\RamChecker;

class SystemCheckerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_checks_IO_first_then_CPU()
    {
        $ioChecker = new IoChecker;
        $cpuChecker = new CpuChecker;
        $ioChecker->setNextChecker($cpuChecker);
        $ioChecker->check();

        $this->expectOutputString(
            'checking IO' . PHP_EOL .
            'checking CPU' . PHP_EOL
        );
    }

    /**
     * @test
     */
    public function it_checks_CPU_first_then_ram_then_IO()
    {
        $ioChecker = new IoChecker;
        $cpuChecker = new CpuChecker;
        $ramChecker = new RamChecker;
        $cpuChecker->setNextChecker($ramChecker);
        $ramChecker->setNextChecker($ioChecker);
        $cpuChecker->check();

        $this->expectOutputString(
            'checking CPU' . PHP_EOL .
            'checking RAM' . PHP_EOL .
            'checking IO' . PHP_EOL
        );
    }
}
