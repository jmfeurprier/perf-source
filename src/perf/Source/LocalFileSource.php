<?php

namespace perf\Source;

/**
 *
 *
 */
class LocalFileSource implements Source
{

    /**
     *
     *
     * @var string
     */
    private $path;

    /**
     * Static constructor.
     *
     * @param string $path
     * @return LocalFileSource
     * @throws \InvalidArgumentException
     */
    public static function create($path)
    {
        return new self($path);
    }

    /**
     * Constructor.
     *
     * @param string $path
     */
    private function __construct($path)
    {
        if (!is_string($path)) {
            throw new \InvalidArgumentException();
        }

        $this->path = $path;
    }

    /**
     *
     *
     * @return string
     * @throws SourceException
     */
    public function getContent()
    {
        $content = file_get_contents($this->path);

        if (false === $content) {
            throw new SourceException("Failed to get file content at '{$this->path}'.");
        }

        return $content;
    }
}
