<?php

namespace AwesomePatterns\Adapter;

/**
 * simulate 3rd party services, usually get per api
 */
class DropboxFileSystem
{

    /**
     * @param $filename
     *
     * @return string
     */
    public function getFile($filename)
    {
        return 'Dropbox File';
    }
}
