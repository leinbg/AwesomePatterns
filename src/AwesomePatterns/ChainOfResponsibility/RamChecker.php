<?php

namespace AwesomePatterns\ChainOfResponsibility;

/**
 * Class MemoryChecker
 *
 * @package AwesomePatterns\ChainOfResponsibility
 */
class RamChecker extends SystemChecker implements SystemCheckerInterface
{

    /**
     *
     */
    public function check()
    {
        echo "checking RAM" . PHP_EOL;

        $this->next();
    }
}
