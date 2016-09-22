<?php

namespace AwesomePatterns\Template;

/**
 * Class XmlParser: provide parser structure,
 * customize functions will be implemented in derived Class (BillingParser and OrderParser)
 *
 * @package AwesomePatterns\Template
 */
abstract class XmlParserProvider
{

    private $xml;

    /**
     * @param $xml
     *
     * @return bool
     */
    public function handle($xml)
    {
        $this->setXml($xml);
        $this->handleBasicNode()
             ->handleUserNode()
             ->customize();

        return true;
    }

    /**
     * @return $this
     */
    protected function handleBasicNode()
    {
        echo 'parsing basic information' . PHP_EOL;

        return $this;
    }

    /**
     *
     */
    protected function handleUserNode()
    {
        echo 'parsing user node' . PHP_EOL;

        return $this;
    }

    abstract public function customize();

    /**
     * @param $xml
     */
    public function setXml($xml)
    {
        $this->xml = $xml;
    }
}
