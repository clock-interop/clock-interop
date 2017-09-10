# Clock Interoperability Project

*clock_interop* project attempts to standardize an interface for date/time providers to achieve interoperability.

The project tries to settle on a consensual interface and recommendations through discussions and trials.

The purpose of a standardized date/time provider interface is to provide an application-wide abstraction of current system time. Vendors have implemented their own date/time providers and have used them in their packages as dependencies, which may turn out to be a problem if you need to integrate several of such packages in one codebase. We believe that there should be a single source of truth regarding current time, and the fragmentation of implementations that do __de facto__ the same thing is inconvenient.

The work done in this project is not officially endorsed by the [PHP-FIG](https://www.php-fig.org). We adhere to the spirit and ideals of PHP-FIG, and hope this project will pave the way for a future PSR.


## Installation

You can install this package through Composer:

```sh
composer require clock-interop/clock-interop
```


## Contributing

Everyone is more than welcome to join us and participate. The discussion and votes take place in Github issues and pull requests; feel free to jump in and share your opinion.
