<?php declare(strict_types = 1);

namespace Pierotto\DateTimeUtils\Domain;

/**
 * The TimeToStringConverter class provides methods to convert time values (in seconds or minutes) to formatted time strings.
 * It allows you to specify the output time format using the format parameter, which defaults to 'H:i' (hours and minutes).
 */
class TimeToStringConverter
{

	/**
	 * TimeToStringConverter::convertSecondsToTime(3600); // Output: 01:00
	 * TimeToStringConverter::convertSecondsToTime(7200, 'H:i:s'); // Output: 02:00:00
	 */
	public static function convertSecondsToTime(int $seconds, string $format = 'H:i'): string
	{
		return \gmdate($format, $seconds);
	}


	/**
	 * TimeToStringConverter::convertMinutesToTime(90); // Output: 01:30
	 * TimeToStringConverter::convertMinutesToTime(120, 'H:i:s'); // Output: 02:00:00
	 */
	public static function convertMinutesToTime(int $minutes, string $format = 'H:i'): string
	{
		return self::convertSecondsToTime($minutes * 60, $format);
	}

}
