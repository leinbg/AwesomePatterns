<?php

namespace AwesomePatterns\Adapter;

/**
 * Class File
 *
 * @package AwesomePatterns\Adapter
 */
class File
{

    /**
     * @var FileDriverInterface $driver
     */
    private $driver;

    /**
     * @param $filename
     *
     * @return string
     */
    public function get($filename)
    {
        return $this->driver->get($filename);
    }

    /**
     * @return FileDriverInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param FileDriverInterface $driver
     */
    public function setDriver(FileDriverInterface $driver)
    {
        $this->driver = $driver;
    }
}
