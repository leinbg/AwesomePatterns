<?php

namespace AwesomePatterns\Strategy;

/**
 * EmailClient Class
 */
class EmailClient
{
	/**
	 * send email using specific Agent
	 * @param  EmailAgentInterface $agent agent interface
	 * @return string
	 */
	public function send(EmailAgentInterface $agent)
	{
		return $agent->sendMail();
	}
}