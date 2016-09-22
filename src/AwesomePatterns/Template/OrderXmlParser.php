<?php

namespace AwesomePatterns\Template;

/**
 * Class OrderXmlParser
 *
 * @package AwesomePatterns\Template
 */
class OrderXmlParser extends XmlParserProvider implements XmlParserInterface
{

    /**
     * @return $this
     */
    public function customize()
    {
        echo "parsing order" . PHP_EOL;

        return $this;
    }
}
