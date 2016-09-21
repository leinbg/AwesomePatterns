<?php

use AwesomePatterns\Adapter\LocalDriver;

/**
 * Class LocalDriverTest
 */
class LocalDriverTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_can_call_local_file_system_to_get_file()
    {
        $dummyFile = 'dummy';
        $localFileSystem = $this->prophesize(\AwesomePatterns\Adapter\LocalFileSystem::class);
        $localFileSystem->getFileByName(\Prophecy\Argument::any())->shouldBeCalled()->willReturn($dummyFile);
        $localDriver = new LocalDriver($localFileSystem->reveal());

        $this->assertEquals($dummyFile, $localDriver->get('any file'));
    }
}
