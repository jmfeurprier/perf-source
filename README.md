Source
======

Source package allows to abstract data sources.

## Installation & Requirements

Source has no dependencies on other libraries.

Install it with [Composer](https://getcomposer.org/):

```shell script
composer require perf/source
```

## Usage

```php
<?php

use perf\Source\LocalFileSource;
use perf\Source\NullSource;
use perf\Source\SourceInterface;
use perf\Source\StringSource;

$sources = [
    new LocalFileSource('/foo/bar/baz.txt'),
    new NullSource(),
    new StringSource('Foo bar baz.'),
];

function show_source_details(SourceInterface $source)
{
    echo "Size: {$source->getSize()}", PHP_EOL;
    echo "Content: {$source->getContent()}", PHP_EOL;
}

foreach ($sources as $source) {
    show_source_details($source);
}
```
