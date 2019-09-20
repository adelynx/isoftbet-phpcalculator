<?php

namespace iSoftBet\Operations;

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
}