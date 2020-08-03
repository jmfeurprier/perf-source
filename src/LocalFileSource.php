<?php

namespace perf\Source;

use perf\Source\Exception\SourceException;

class LocalFileSource implements SourceInterface
{
    private string $path;

    public static function create(string $path): self
    {
        return new self($path);
    }

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string
    {
        $content = file_get_contents($this->path);

        if (false === $content) {
            throw new SourceException("Failed to read file content at '{$this->path}'.");
        }

        return $content;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(): int
    {
        $size = filesize($this->path);

        if (false === $size) {
            throw new SourceException("Failed to read file size at '{$this->path}'.");
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function send(): void
    {
        if (false === readfile($this->path)) {
            throw new SourceException("Failed to read file content at '{$this->path}'.");
        }
    }
}
