<?php

namespace AwesomePatterns\Adapter;

/**
 * Interface FileDriverInterface
 *
 * @package AwesomePatterns\Adapter
 */
interface FileDriverInterface
{

    /**
     * @param $filename
     *
     * @return mixed
     */
    public function get($filename);
}
