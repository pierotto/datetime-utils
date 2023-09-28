<?php declare(strict_types = 1);

namespace Pierotto\DateTimeUtils\Domain;

class StringToTimeConverter
{

	/**
	 * The convertToSeconds method accepts a time string in the format of "HH:MM:SS" or "MM:SS" and converts it into the total number of seconds.
	 * It can handle various time formats, including hours, minutes, and seconds, or just minutes and seconds.
	 *
	 * StringToTimeConverter::convertToSeconds("02:30:45"); // Output: 9045
	 * StringToTimeConverter::convertToSeconds("15:30"); // Output: 55800
	 */
	public static function convertToSeconds(string $timeString): int
	{
		$timeParts = \explode(":", $timeString);
		$timeParts = \array_pad($timeParts, 3, 0);

		[$hours, $minutes, $seconds] = \array_map(static function (string $value): int {
			return (int) $value;
		}, $timeParts);

		return $hours * 3600 + $minutes * 60 + $seconds;
	}


	/**
	 * The convertToMinutes method accepts a time string in the format of "HH:MM:SS" or "MM:SS" and converts it into the total number of minutes.
	 * It utilizes the convertToSeconds method to calculate the total number of seconds and then divides it by 60 to obtain the equivalent number of minutes.
	 *
	 * StringToTimeConverter::convertToMinutes("02:30:45"); // Output: 150
	 * StringToTimeConverter::convertToMinutes("15:30"); // Output: 930
	 */
	public static function convertToMinutes(string $timeString): int
	{
		return self::convertToSeconds($timeString) / 60;
	}

}
