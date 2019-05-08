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
        $number = new WonderlandNumber();
        $this->assertEquals(6, NumberOperator::getNumberOfDigits($number->getValue()));
    }

    public function testMultipliedBy2HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber();
        $multiplied = 2 * $number->getValue();
        $this->assertTrue(NumberOperator::hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy3HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber();
        $multiplied = 3 * $number->getValue();
        $this->assertTrue(NumberOperator::hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy4HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber();
        $multiplied = 4 * $number->getValue();
        $this->assertTrue(NumberOperator::hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy5HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber();
        $multiplied = 5 * $number->getValue();
        $this->assertTrue(NumberOperator::hasAllTheSameDigits($number->getValue(), $multiplied));
    }

    public function testMultipliedBy6HasSameDigitsAsTheOriginalNumber()
    {
        $number = new WonderlandNumber();
        $multiplied = 6 * $number->getValue();
        $this->assertTrue(NumberOperator::hasAllTheSameDigits($number->getValue(), $multiplied));
    }
}
