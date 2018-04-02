# ClockInterface Meta document

## Introduction

This document describes the process and discussions that led to the ClockInterface specification and explains
the reasons behind each decision.


## Motivation

Vendors have implemented their own date/time providers and have used them in their packages as dependencies, which
may turn out to be a problem if you need to integrate several of such packages in one codebase. We believe that there
should be a single source of truth regarding current time, and the fragmentation of implementations that do __de facto__
the same thing is inconvenient.


## Goal

The goal of the specification is to standardize an interface of current time providers to make them interoperable.


## Interface name

Various vendors that have already implemented a current time provider tend to choose either `DateTimeProvider`
or a variation thereof, or `Clock`. After some thought and discussion, we came to the conclusion that `Clock`
is the preferred variant for several reasons:

- "clock" is a common word for a common time-telling device, and therefore we believe it should work as a metaphor
for such device in code;
- it seems far more prevalent than `DateTimeProvider`-ish names in existing implementations;
- it also appears in other programming languages that provide similar mechanism, such as
[Java](https://docs.oracle.com/javase/8/docs/api/java/time/class-use/Clock.html),
[C++11](http://en.cppreference.com/w/cpp/chrono),
or [Haskell](https://hackage.haskell.org/package/time-1.9.1/docs/Data-Time-Clock.html).


## Exposed methods

The `Clock` interface **exposes a single method,** `now()`, which **returns** an instance of `DateTimeImmutable`.
While `DateTimeInterface` would be a more generic option for a return type, we believe that `DateTimeImmutable`
is the only _sensible_ option, as oppossed to `DateTime`, because date-times are commonly used as value objects,
and as such can benefit greatly from immutability.

There was some discussion regarding the **method's name,** the prospective candidates being `getDateTime()` and `now()`,
as these are commonly used in existing implementations. We chose `now()` because it reveals its intention in a clear
and sensible way. We are aware that both `Clock` and `now()` are rather domain-specific names, but we believe the domain
and the wording is so ubiquitous that it should not cause any confusion.


### Other exposed methods

Several implementations provide other methods for partial information such as `getDate()` or `getTime()`. All these
information can be derived from the complete information returned by `now()`, and therefore, to keep the interface
as simple as possible, introducing any other method seems unnecessary.


## Time zones

The specification requires that the returned value is set in the default time zone, as set via the `date.timezone`
configuration option or a call to the `date_default_timezone_set()` function. This is to keep the interface aligned
with the behaviour of PHP.


## Contributors

The following list contains people who contributed in the discussions or votes, in alphabetical order:

- [Jan Kuchař](https://github.com/jkuchar),
- [Jiří Pudil](https://github.com/jiripudil).
