# ClockInterface

This document describes a common interface for services providing the current time.

The goal set by `ClockInterface` is to standardize an interface of current time providers to make them mutually
interchangeable.

The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED", "MAY",
and "OPTIONAL" in this document are to be interpreted as described in [RFC 2119](http://tools.ietf.org/html/rfc2119).


## 1. Specification

- The `Interop\Clock\ClockInterface` exposes one method: `now`.
- `now` takes no parameters and implementations SHOULD NOT accept any additional parameters. A call to this method
  MUST return an instance of `\DateTimeImmutable`, set in the configured default time zone. Depending on the design
  of the implementation, two successive calls to `now` MAY return different values.


## 2. Package

The interface is provided as part of the `clock-interop/clock-interop` package.

Packages providing implementations SHOULD declare that they [provide](https://getcomposer.org/doc/04-schema.md#provide)
`clock-interop/clock-interop-implementation:1.0.0`.

Projects requiring an implementation SHOULD require `clock-interop/clock-interop-implementation:1.0.0`.


## 3. `Interop\Clock\ClockInterface`

```php
<?php

namespace Interop\Clock;


/**
 * Describes the interface of a provider of the current system time.
 */
interface ClockInterface
{

	/**
	 * Returns the current system time, set in the default time zone.
	 */
	public function now(): \DateTimeImmutable;

}
```
