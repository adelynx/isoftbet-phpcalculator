<?php

namespace iSoftBet\Operations;

use DivisionByZeroError;
use iSoftBet\IOperation;

class DivisionOperation implements IOperation
{
    /**
     * This method calculate the division of 2 operands
     *
     * @param float $firstOperand
     * @param float $secondOperand
     * @return float
     */
    public function calculate(float $firstOperand, float $secondOperand): float
    {
        if ($secondOperand == 0) {
            throw new DivisionByZeroError('Division by 0 is not supported');
        }

        return $firstOperand / $secondOperand;
    }
}