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
}
