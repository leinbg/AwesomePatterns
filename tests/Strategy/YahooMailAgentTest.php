<?php

use AwesomePatterns\Strategy\YahooMailAgent;

class YahooMailAgentTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function it_can_send_mail_by_yahoo_agent()
	{
		$agent = new YahooMailAgent;

		$this->assertEquals('Yahoo', $agent->sendMail());
	}
}