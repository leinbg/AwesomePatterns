<?php

namespace AwesomePatterns\Adapter;

/**
 * Class LocalFileSystem
 *
 * @package AwesomePatterns\Adapter
 */
class LocalFileSystem
{

    /**
     * @param $filename
     *
     * @return string
     */
    public function getFileByName($filename)
    {
        return 'Local File';
    }
}
