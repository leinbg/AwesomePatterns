<?php

namespace AwesomePatterns\Strategy;

/**
 * Strategy 2: YahooMailAgent
 */
class YahooMailAgent implements EmailAgentInterface
{
	/**
	 * send Mail by Yahoo Agent
	 * @return string
	 */
	public function sendMail()
	{
		return 'Yahoo';
	}
}