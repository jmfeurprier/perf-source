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
     * @return void
     * @throws SourceException
     */
    public function send();
}
