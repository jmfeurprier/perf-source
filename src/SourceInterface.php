<?php

namespace perf\Source;

use perf\Source\Exception\SourceException;

interface SourceInterface
{
    /**
     * @return string
     *
     * @throws SourceException
     */
    public function getContent(): string;

    /**
     * @return int
     *
     * @throws SourceException
     */
    public function getSize(): int;

    /**
     * @return void
     *
     * @throws SourceException
     */
    public function send(): void;
}
