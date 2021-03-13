# Statamic Ray Addon

A *very* simple addon for Statamic 3 adding a [Ray](https://myray.app) tag & modifier.

## Installation

You can install the package via composer:

```bash
composer require geekish/statamic-ray
```

## Usage

Pretty much the same as the `dump` tag & modifier, except output is sent to Ray.

### Tag

The tag with no arguments will send the current context. Like the `dump` tag, it excludes possibly sensitive information like your config.

```php
{{ ray }}
```

Again, like the `dump` tag, it can be used inside loops.

```
{{ entries }}
  {{ dump }}
{{ /entries }}
```

You can also send a single variable.

```php
{{ ray:my_variable }}
```

### Modifier

```php
{{ my_variable | ray }}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
