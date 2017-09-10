<?php

namespace Interop\Clock;


/**
 * Describes the interface of a provider of the current system time.
 */
interface DateTimeProviderInterface
{

	/**
	 * Returns the current system time.
	 *
	 * @return \DateTimeInterface
	 */
	public function getDateTime();

}
