<?php

namespace perf\Source;

/**
 *
 *
 */
class NullSource implements Source
{

    /**
     * Static constructor.
     *
     * @return StringSource
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Constructor.
     */
    private function __construct()
    {
    }

    /**
     *
     *
     * @return string
     * @throws SourceException
     */
    public function getContent()
    {
        return '';
    }
}
