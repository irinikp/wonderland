<?php
namespace Wonderland;

/**
 * Class WonderlandNumber
 * @package Wonderland
 */
class WonderlandNumber
{
    protected const MIN_6_DIGIT_NUMBER = 100000;
    protected const MIN_7_DIGIT_NUMBER = 1000000;
    /**
     * @var int
     */
    protected $value;
    /**
     * @var NumberOperator
     */
    protected $number_operator;

    /**
     * WonderlandNumber constructor.
     *
     * @param NumberOperator $number_operator
     */
    public function __construct(NumberOperator $number_operator)
    {
        $this->number_operator = $number_operator;
        $this->value = $this->computeValue();
    }

    /**
     * @return int
     */
    protected function computeValue(): int
    {
        $multiple = 0;
        for ($i=self::MIN_6_DIGIT_NUMBER; $i<self::MIN_7_DIGIT_NUMBER; ++$i) {
            if ($this->haveTheMultiplesSameDigits($i, 2, 6)) {
                $multiple = $i;
                break;
            }
        }
        return $multiple;
    }

    /**
     * @param int $number
     * @param int $multiplier
     * @param int $multiplier_limit
     *
     * @return bool
     */
    protected function haveTheMultiplesSameDigits($number, $multiplier, $multiplier_limit): bool
    {
        if ($multiplier > $multiplier_limit ) return true;
        $multiple = $multiplier * $number;
        if ($this->number_operator->hasAllTheSameDigits($number, $multiple) ) {
            return $this->haveTheMultiplesSameDigits($number, $multiplier+1, $multiplier_limit);
        }
        return false;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
