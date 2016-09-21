<?php

use AwesomePatterns\Adapter\File;
use AwesomePatterns\Adapter\LocalFileSystem;
use AwesomePatterns\Adapter\LocalDriver;
use AwesomePatterns\Adapter\DropboxFileSystem;
use AwesomePatterns\Adapter\DropboxDriver;

/**
 * Class FileSystemTest
 */
class FileTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_can_get_file_from_local_file_system()
    {
        $filename = 'file';
        $file = new File;
        $file->setDriver(new LocalDriver(new LocalFileSystem));

        $this->assertEquals('Local File', $file->get($filename));
    }

    /**
     * @test
     */
    public function it_can_get_file_from_dropbox_file_system()
    {
        $filename = 'file';
        $file = new File;
        $file->setDriver(new DropboxDriver(new DropboxFileSystem));

        $this->assertEquals('Dropbox File', $file->get($filename));
    }
}
