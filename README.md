# Datetime Utils

A collection of utility functions for time manipulation in PHP.

## Installation

To get started, require the bundle and its dependencies using Composer:

```shell
composer require pierotto/datetime-utils
```

## Usage

```php
StringToTimeConverter::convertToSeconds("02:30:45"); // Output: 9045
StringToTimeConverter::convertToSeconds("15:30"); // Output: 55800
StringToTimeConverter::convertToMinutes("02:30:45"); // Output: 150
StringToTimeConverter::convertToMinutes("15:30"); // Output: 930

TimeBuilder::createTimeStringFromTime('1','30'); // Output: 01:30
TimeBuilder::createTimeStringFromTime('7','5'); // Output: 07:05
TimeBuilder::createTimeStringFromTime('10','5', '1'); // Output: 10:05:01

TimeToStringConverter::convertSecondsToTime(3600); // Output: 01:00
TimeToStringConverter::convertSecondsToTime(7200, 'H:i:s'); // Output: 02:00:00
TimeToStringConverter::convertMinutesToTime(90); // Output: 01:30
TimeToStringConverter::convertMinutesToTime(120, 'H:i:s'); // Output: 02:00:00
```

