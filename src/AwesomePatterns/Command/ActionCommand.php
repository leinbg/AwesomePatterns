<?php

namespace AwesomePatterns\Command;

/**
 * Interface ActionCommand
 *
 * @package AwesomePatterns\Command
 */
interface ActionCommand
{

    /**
     * @return mixed
     */
    public function exec();
}
