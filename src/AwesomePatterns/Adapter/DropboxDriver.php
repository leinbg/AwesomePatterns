<?php

namespace AwesomePatterns\Adapter;

/**
 * Class DropboxDriver: Adapter for Dropbox
 *
 * @package AwesomePatterns\Adapter
 */
class DropboxDriver implements FileDriverInterface
{
    private $dropbox;

    /**
     * DropboxDriver constructor.
     *
     * @param DropBoxFileSystem $dropbox
     */
    public function __construct(DropboxFileSystem $dropbox)
    {
        $this->dropbox = $dropbox;
    }

    /**
     * @param $filename
     *
     * @return string
     */
    public function get($filename)
    {
        return $this->dropbox->getFile($filename);
    }
}
