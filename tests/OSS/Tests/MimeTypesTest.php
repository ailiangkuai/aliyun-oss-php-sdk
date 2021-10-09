<?php

namespace OSSX\Tests;

use OSSX\Core\MimeTypes;

class MimeTypesTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMimeType()
    {
        $this->assertEquals('application/xml', MimeTypes::getMimetype('file.xml'));
    }
}
