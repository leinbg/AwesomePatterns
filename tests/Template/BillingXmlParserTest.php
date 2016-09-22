<?php

use AwesomePatterns\Template\BillingXmlParser;

/**
 * Class BillingXmlParserTest
 */
class BillingXmlParserTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_can_parse_billing_xml()
    {
        $parser = new BillingXmlParser;
        $parser->handle('dummy xml');

        $this->expectOutputString(
            "parsing basic information" . PHP_EOL .
            "parsing user node" . PHP_EOL .
            "parsing billing" . PHP_EOL
        );
    }
}
