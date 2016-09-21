<?php

use AwesomePatterns\Adapter\DropboxDriver;

/**
 * Class DropboxDriverTest
 */
class DropboxDriverTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_can_call_dropbox_file_system_to_get_file()
    {
        $dummyFile = 'dummy file';
        $dropbox = $this->prophesize(\AwesomePatterns\Adapter\DropboxFileSystem::class);
        $dropbox->getFile(\Prophecy\Argument::any())->shouldBeCalled()->willReturn($dummyFile);
        $driver = new DropboxDriver($dropbox->reveal());

        $this->assertEquals($dummyFile, $driver->get('any file'));
    }
}
