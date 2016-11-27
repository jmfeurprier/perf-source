<?php

namespace perf\Source;

/**
 *
 */
class NullSourceTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testGetContent()
    {
        $source = NullSource::create();

        $this->assertSame('', $source->getContent());
    }

    /**
     *
     */
    public function testGetSize()
    {
        $source = NullSource::create();

        $this->assertSame(0, $source->getSize());
    }
}
