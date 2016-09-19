<?php

use AwesomePatterns\Strategy\GoogleMailAgent;

class GoogleMailClientTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function it_can_send_mail_by_google_agent()
	{
		$agent = new GoogleMailAgent;

		$this->assertEquals('Google', $agent->sendMail());
	}
}