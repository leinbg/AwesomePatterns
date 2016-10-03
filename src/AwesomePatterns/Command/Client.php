<?php

namespace AwesomePatterns\Command;

/**
 * Class Client
 *
 * @package AwesomePatterns\Command
 */
class Client
{

    /**
     * @param ActionCommand $action
     */
    public function performAction(ActionCommand $action)
    {
        $action->exec();
    }
}
