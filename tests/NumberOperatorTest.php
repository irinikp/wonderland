<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Wonderland\NumberOperator;

require __DIR__ . '/../vendor/autoload.php';

class NumberOperatorTest extends TestCase
{

    public function testNumberOfDigitsReturnsFiveOnFiveDigitsNumber()
    {
        $number = 12333;
        self::assertEquals(5, (new NumberOperator)->getNumberOfDigits($number));
    }

    public function testNumberOfDigitsReturnsOneOnOneDigitsNumber()
    {
        $number = 8;
        self::assertEquals(1, (new NumberOperator)->getNumberOfDigits($number));
    }

    public function testHasAllTheSameDigitsReturnsTrueWhenInputArgsHaveSameDigits()
    {
        $number1 = 12345;
        $number2 = 54231;
        $this->assertTrue((new NumberOperator)->hasAllTheSameDigits($number1, $number2));
    }

    public function testHasAllTheSameDigitsReturnsFalseWhenInputArgsDontHaveSameDigits()
    {
        $number1 = 12345;
        $number2 = 54261;
        $this->assertFalse((new NumberOperator)->hasAllTheSameDigits($number1, $number2));
    }

    public function testHasAllTheSameDigitsReturnsFalseWhenInputArgsHaveSameDigitsDifferentSize()
    {
        $number1 = 12345;
        $number2 = 542;
        $this->assertFalse((new NumberOperator)->hasAllTheSameDigits($number1, $number2));
    }

    public function testHasAllTheSameDigitsReturnsFalseWhenInputArgsHaveSameDigitsButNotAllSameSize()
    {
        $number1 = 12345;
        $number2 = 54222;
        $this->assertFalse((new NumberOperator)->hasAllTheSameDigits($number1, $number2));
    }
}
