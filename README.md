Source
======

Source package allows to abstract data sources.

## Installation & Requirements

Source has no dependencies on other libraries.

Install it with [Composer](http://getcomposer.org/):

```json
{
	"require":
	{
		"perf/source"  : "~1.0"
	}
}
```

## Usage

### Local file source

```php
<?php

$path = '/foo/bar/settings.ini';

$source = \perf\Source\LocalFileSource::create($path);

function print_content(\perf\Source\Source $source)
{
	echo $source->getContent();
}
```

### String source

```php
<?php

$string = 'foo = bar';

$source = \perf\Source\StringSource::create($string);

function print_content(\perf\Source\Source $source)
{
	echo $source->getContent();
}
```
