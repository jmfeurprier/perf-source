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
     * {@inheritdoc}
     */
    public function getContent()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function send()
    {
    }
}
