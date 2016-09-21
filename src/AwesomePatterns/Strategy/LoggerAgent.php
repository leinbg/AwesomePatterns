<?php

namespace AwesomePatterns\Strategy;

/**
 * Strategy 3: Logger
 */
class LoggerAgent implements EmailAgentInterface
{
    /**
     * send Mail to Logger
     * @return string
     */
    public function sendMail()
    {
        return 'Logger';
    }
}
