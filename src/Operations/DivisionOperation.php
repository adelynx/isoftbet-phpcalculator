<?php

namespace iSoftBet\Operations;

use DivisionByZeroError;
use iSoftBet\IOperation;

class DivisionOperation implements IOperation
{
    /**
     * This method calculate the division of 2 operands
     *
     * @param float $FirstOperand
     * @param float $SecondOperand
     * @return float
     */
    public function Calculate(float $FirstOperand, float $SecondOperand): float
    {
        if ($SecondOperand == 0) {
            throw new DivisionByZeroError('Division by 0 is not supported');
        }

        return $FirstOperand / $SecondOperand;
    }
}