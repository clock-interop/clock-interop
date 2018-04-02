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
