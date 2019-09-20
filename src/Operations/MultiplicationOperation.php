<?php

namespace iSoftBet\Operations;

use iSoftBet\IOperation;

class MultiplicationOperation implements IOperation
{
    /**
     * This method calculate the multiplication of 2 operands
     *
     * @param float $firstOperand
     * @param float $secondOperand
     * @return float
     */
    public function calculate(float $firstOperand, float $secondOperand): float
    {
        return $firstOperand * $secondOperand;
    }
}