<?php
namespace Wonderland;

class WonderlandNumber
{

    protected $value;
    protected $number_operator;

    public function __construct(NumberOperator $number_operator)
    {
        $this->number_operator = $number_operator;
        $this->value = $this->computeValue();
    }

    protected function computeValue(): int
    {
        $multiple = 1;
        for ($i=100000; $i<1000000; ++$i) {
            if ($this->hasTheMultipleSameDigits($i, 2)) {
                $multiple = $i;
                if (!$this->hasTheMultipleSameDigits($multiple, 3)) {
                    $multiple = 1;
                    continue;
                }
                if (!$this->hasTheMultipleSameDigits($multiple, 4)) {
                    $multiple = 1;
                    continue;
                }
                if (!$this->hasTheMultipleSameDigits($multiple, 5)) {
                    $multiple = 1;
                    continue;
                }
                if (!$this->hasTheMultipleSameDigits($multiple, 6)) {
                    $multiple = 1;
                    continue;
                }
                break;
            }
        }
        return $multiple;
    }

    protected function hasTheMultipleSameDigits($number, $multiplier): bool
    {
        $multiple = $multiplier * $number;
        return $this->number_operator->hasAllTheSameDigits($number, $multiple);
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
