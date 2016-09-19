<?php

use AwesomePatterns\Strategy\LoggerAgent;

class LoggerAgentTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function it_can_send_mail_by_logger_agent()
	{
		$agent = new LoggerAgent;

		$this->assertEquals('Logger', $agent->sendMail());
	}
}