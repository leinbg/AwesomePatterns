<?php

namespace AwesomePatterns\Strategy;

/**
 * Strategy 1: GoogleMailAgent
 */
class GoogleMailAgent implements EmailAgentInterface
{
    /**
     * send Mail by Google Agent
     * @return string
     */
    public function sendMail()
    {
        return 'Google';
    }
}
