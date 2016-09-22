<?php

use AwesomePatterns\Template\OrderXmlParser;

/**
 * Class OrderXmlParserTest
 */
class OrderXmlParserTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_can_parse_order_xml()
    {
        $parser = new OrderXmlParser;
        $parser->handle('dummy xml');

        $this->expectOutputString(
            "parsing basic information" . PHP_EOL .
            "parsing user node" . PHP_EOL .
            "parsing order" . PHP_EOL
        );
    }
}
