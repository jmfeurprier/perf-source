<?php

namespace perf\Source;

use PHPUnit\Framework\TestCase;

class StringSourceTest extends TestCase
{
    public function testGetContent()
    {
        $string = 'foo';

        $source = StringSource::create($string);

        $this->assertSame($string, $source->getContent());
    }

    public function testGetSize()
    {
        $string = 'foo';

        $source = StringSource::create($string);

        $this->assertSame(3, $source->getSize());
    }
}
