<?php

namespace AwesomePatterns\Adapter;

/**
 * Class LocalDriver: Adapter for LocalFileSystem
 *
 * @package AwesomePatterns\Adapter
 */
class LocalDriver implements FileDriverInterface
{

    /**
     * @var LocalFileSystem
     */
    private $localFileSystem;

    /**
     * LocalDriver constructor.
     *
     * @param LocalFileSystem $localFileSystem
     */
    public function __construct(LocalFileSystem $localFileSystem)
    {
        $this->localFileSystem = $localFileSystem;
    }

    /**
     * @param $filename
     *
     * @return string
     */
    public function get($filename)
    {
        return $this->localFileSystem->getFileByName($filename);
    }
}
