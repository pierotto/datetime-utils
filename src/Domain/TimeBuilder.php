<?php declare(strict_types = 1);

namespace Pierotto\DateTimeUtils\Domain;

class TimeBuilder
{

	/**
	 * Create a formatted time string from hours, minutes, and optionally seconds.
	 *
	 * This method accepts hours, minutes, and an optional seconds value and creates a formatted time string.
	 * If seconds are not provided, they are omitted from the output.
	 *
	 * TimeBuilder::createTimeStringFromTime('1','30'); // Output: 01:30
	 * TimeBuilder::createTimeStringFromTime('7','5'); // Output: 07:05
	 * TimeBuilder::createTimeStringFromTime('10','5', '1'); // Output: 10:05:01
	 */
	public static function createTimeStringFromTime(
		string $hours,
		string $minutes,
		?string $seconds = NULL
	): string
	{
		$values = \array_filter(\func_get_args(), static fn($value) => $value !== NULL);
		$values = \array_map(static function (string $value): string {
			return \str_pad($value, 2, '0', \STR_PAD_LEFT);
		}, $values);

		$pattern = \count($values) === 2 ? '%s:%s' : '%s:%s:%s';

		return \sprintf($pattern, ...$values);
	}

}
