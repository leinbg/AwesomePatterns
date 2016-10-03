<?php

use AwesomePatterns\Command\Client;
use AwesomePatterns\Command\CommandOpenFile;
use AwesomePatterns\Command\CommandPrintFile;
use AwesomePatterns\Command\CommandSaveFile;

/**
 * Class ActionCommandTest
 */
class ActionCommandTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Client $client
     */
    private $client;

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        $this->client = new Client;
    }

    /**
     * @test
     */
    public function it_can_open_a_file()
    {
        $this->client->performAction(new CommandOpenFile);

        $this->expectOutputString('open a file.');
    }

    /**
     * @test
     */
    public function it_can_print_a_file()
    {
        $this->client->performAction(new CommandPrintFile);

        $this->expectOutputString('print the file.');
    }

    /**
     * @test
     */
    public function it_can_save_a_file()
    {
        $this->client->performAction(new CommandSaveFile);

        $this->expectOutputString('save the file.');
    }
}
