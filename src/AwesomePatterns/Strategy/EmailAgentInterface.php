<?php

namespace AwesomePatterns\Strategy;

/**
 * Interface EmailAgentInterface
 *
 * @package AwesomePatterns\Strategy
 */
interface EmailAgentInterface
{
    /**
     * sendMail by Agent
     * @return string
     */
    public function sendMail();
}
