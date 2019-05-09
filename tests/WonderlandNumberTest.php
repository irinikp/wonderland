<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Wonderland\NumberOperator;
use Wonderland\WonderlandNumber;

require __DIR__ . '/../vendor/autoload.php';

class WonderlandNumberTest extends TestCase
{

    public function testAWonderLandNumberMustHaveSixDigits()
    {
        $number = new WonderlandNumber(new NumberOperator());
        $this->assertEquals(6, (new NumberOperator)->getNumberOfDigits($number->getValue()));
    }

    public function testMultipliedBy2HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber(new NumberOperator());
        $multiplied = 2 * $number->getValue();
        $this->assertTrue((new NumberOperator)->hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy3HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber(new NumberOperator());
        $multiplied = 3 * $number->getValue();
        $this->assertTrue((new NumberOperator)->hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy4HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber(new NumberOperator());
        $multiplied = 4 * $number->getValue();
        $this->assertTrue((new NumberOperator)->hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy5HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber(new NumberOperator());
        $multiplied = 5 * $number->getValue();
        $this->assertTrue((new NumberOperator)->hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy6HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber(new NumberOperator());
        $multiplied = 6 * $number->getValue();
        $this->assertTrue((new NumberOperator)->hasAllTheSameDigits($number->getValue(), $multiplied));
    }
}
