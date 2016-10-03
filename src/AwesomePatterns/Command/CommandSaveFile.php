<?php

namespace AwesomePatterns\Command;

/**
 * Class CommandSaveFile
 *
 * @package AwesomePatterns\Command
 */
class CommandSaveFile implements ActionCommand
{

    /**
     *
     */
    public function exec()
    {
        echo 'save the file.';
    }
}
