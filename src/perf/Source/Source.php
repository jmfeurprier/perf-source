<?php

namespace perf\Source;

/**
 *
 *
 */
interface Source
{

    /**
     *
     *
     * @return string
     * @throws SourceException
     */
    public function getContent();

    /**
     *
     *
     * @return int
     * @throws SourceException
     */
    public function getSize();

    /**
     *
     *
     * @return void
     * @throws SourceException
     */
    public function send();
}
