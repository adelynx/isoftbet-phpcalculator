<?php

namespace iSoftBet\Operations;

use InvalidArgumentException;
use iSoftBet\IOperation;

class MinusOperation implements IOperation
{
    /**
     * This method calculate the subtraction of 2 operands
     *
     * @param float $firstOperand
     * @param float $secondOperand
     * @return float
     */
    public function calculate(float $firstOperand, float $secondOperand): float
    {
        return $firstOperand - $secondOperand;
    }

    /**
     * This method calculate an operation with multiple operands
     *
     * @param array $operands
     * @return float
     */
    public function multipleCalculate(array $operands): float
    {
        if (count($operands) < 2) {
            throw new InvalidArgumentException('You need at least 2 operands to do this operation.');
        }

        $result = $operands[0];

        array_shift($operands);

        foreach ($operands as $operand) {
            $result = $this->calculate($result, $operand);
        }

        return $result;
    }
}