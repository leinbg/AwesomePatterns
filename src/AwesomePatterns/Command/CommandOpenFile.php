<?php

namespace AwesomePatterns\Command;

/**
 * Class CommandOpenFile
 *
 * @package AwesomePatterns\Command
 */
class CommandOpenFile implements ActionCommand
{

    /**
     *
     */
    public function exec()
    {
        echo "open a file.";
    }
}
