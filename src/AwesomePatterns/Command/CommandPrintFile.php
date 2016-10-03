<?php

namespace AwesomePatterns\Command;

/**
 * Class CommandPrintFile
 *
 * @package AwesomePatterns\Command
 */
class CommandPrintFile implements ActionCommand
{

    /**
     *
     */
    public function exec()
    {
        echo "print the file.";
    }
}
