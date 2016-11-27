<?php

namespace perf\Source;

/**
 *
 */
class StringSourceTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testGetContent()
    {
        $string = 'foo';

        $source = StringSource::create($string);

        $this->assertSame($string, $source->getContent());
    }

    /**
     *
     */
    public function testGetSize()
    {
        $string = 'foo';

        $source = StringSource::create($string);

        $this->assertSame(3, $source->getSize());
    }
}
