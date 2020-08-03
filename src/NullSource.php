<?php

namespace perf\Source;

class NullSource implements SourceInterface
{
    public static function create(): self
    {
        return new self();
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(): int
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function send(): void
    {
    }
}
