<?php

use AwesomePatterns\Strategy\EmailClient;
use AwesomePatterns\Strategy\EmailAgentInterface;

class EmailClientTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function it_can_send_mail_per_agent()
	{
		$client = new EmailClient;
		$agent = $this->prophesize();
		$agent->willImplement(EmailAgentInterface::class);
		$agent->sendMail()->shouldBeCalled();
		$client->send($agent->reveal());
	}
}