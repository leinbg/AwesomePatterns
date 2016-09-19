<?php

namespace AwesomePatterns\Strategy;

interface EmailAgentInterface
{
	/**
	 * sendMail by Agent
	 * @return string
	 */
	public function sendMail();
}