<?php declare(strict_types = 1);

class TimeBuilderTest extends \PHPUnit\Framework\TestCase
{

	public function testCreateTimeStringFromTime(): void
	{
		$this->assertEquals('00:15', \Pierotto\DateTimeUtils\Domain\TimeBuilder::createTimeStringFromTime('0', '15'));
		$this->assertEquals('02:00', \Pierotto\DateTimeUtils\Domain\TimeBuilder::createTimeStringFromTime('2', '0'));
		$this->assertEquals('10:00:05', \Pierotto\DateTimeUtils\Domain\TimeBuilder::createTimeStringFromTime('10', '0', '5'));
	}

}
