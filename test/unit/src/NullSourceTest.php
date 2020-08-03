<?php

namespace perf\Source;

use PHPUnit\Framework\TestCase;

class NullSourceTest extends TestCase
{
    public function testGetContent()
    {
        $source = NullSource::create();

        $this->assertSame('', $source->getContent());
    }

    public function testGetSize()
    {
        $source = NullSource::create();

        $this->assertSame(0, $source->getSize());
    }
}
