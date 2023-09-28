<?php declare(strict_types = 1);

class StringToTimeConverterTest extends \PHPUnit\Framework\TestCase
{

	public function testConvertToSeconds(): void
	{
		$this->assertEquals(36000, \Pierotto\DateTimeUtils\Domain\StringToTimeConverter::convertToSeconds('10:00'));
	}


	public function testConvertToMinutes(): void
	{
		$this->assertEquals(600, \Pierotto\DateTimeUtils\Domain\StringToTimeConverter::convertToMinutes('10:00'));
	}

}
