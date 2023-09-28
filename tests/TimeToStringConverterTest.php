<?php declare(strict_types = 1);

class TimeToStringConverterTest extends \PHPUnit\Framework\TestCase
{

	public function testConvertSecondsToTime(): void
	{
		$this->assertEquals('10:00', \Pierotto\DateTimeUtils\Domain\TimeToStringConverter::convertSecondsToTime(36000));
	}


	public function testConvertMinutesToTime(): void
	{
		$this->assertEquals('06:00', \Pierotto\DateTimeUtils\Domain\TimeToStringConverter::convertMinutesToTime(360));
	}

}
