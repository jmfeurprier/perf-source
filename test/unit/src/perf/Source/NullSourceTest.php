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
}
