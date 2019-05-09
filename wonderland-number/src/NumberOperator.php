<?php


namespace Wonderland;


/**
 * Class NumberOperator
 * @package Wonderland
 */
class NumberOperator
{

    /**
     * @param int $number1
     * @param int $number2
     *
     * @return bool
     */
    public function hasAllTheSameDigits($number1, $number2): bool
    {
        $number1_array = $this->numberDigitsToArray($number1);
        $number2_array = $this->numberDigitsToArray($number2);

        return $this->areArraysEqual($number1_array, $number2_array);
    }

    /**
     * @param int $number
     *
     * @return int
     */
    public function getNumberOfDigits($number): int
    {
        return strlen((string)$number);
    }

    /**
     * @param array $array1
     * @param array $array2
     *
     * @return bool
     */
    protected function areArraysEqual($array1, $array2): bool
    {
        return empty(array_diff($array1, $array2));
    }

    /**
     * @param int $number
     *
     * @return array<string>
     */
    protected function numberDigitsToArray($number): array
    {
        return str_split((string)$number);
    }

}
