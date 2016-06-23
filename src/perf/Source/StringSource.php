<?php

namespace perf\Source;

/**
 *
 *
 */
class StringSource implements Source
{

    /**
     *
     *
     * @var string
     */
    private $string;

    /**
     * Static constructor.
     *
     * @param string $string
     * @return StringSource
     * @throws \InvalidArgumentException
     */
    public static function create($string)
    {
        return new self($string);
    }

    /**
     * Constructor.
     *
     * @param string $string
     * @throws \InvalidArgumentException
     */
    private function __construct($string)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException('Provided argument is not a string.');
        }

        $this->string = $string;
    }

    /**
     *
     *
     * @return string
     * @throws SourceException
     */
    public function getContent()
    {
        return $this->string;
    }
}
