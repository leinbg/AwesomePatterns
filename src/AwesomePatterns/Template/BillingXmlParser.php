<?php

namespace AwesomePatterns\Template;

/**
 * Class BillingXmlParser
 *
 * @package AwesomePatterns\Template
 */
class BillingXmlParser extends XmlParserProvider implements XmlParserInterface
{

    /**
     * @return $this
     */
    public function customize()
    {
        echo "parsing billing" . PHP_EOL;

        return $this;
    }
}
