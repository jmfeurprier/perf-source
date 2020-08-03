<?php

namespace perf\Source;

class StringSource implements SourceInterface
{
    private string $content;

    public static function create(string $content): self
    {
        return new self($content);
    }

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize(): int
    {
        return strlen($this->content);
    }

    /**
     * {@inheritdoc}
     */
    public function send(): void
    {
        echo $this->content;
    }
}
