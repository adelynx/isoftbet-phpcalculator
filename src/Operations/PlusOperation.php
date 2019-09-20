<?php

namespace iSoftBet\Operations;

use iSoftBet\IOperation;

class PlusOperation implements IOperation
{
    /**
     * This method calculate the addition of 2 operands
     *
     * @param float $firstOperand
     * @param float $secondOperand
     * @return float
     */
    public function calculate(float $firstOperand, float $secondOperand): float
    {
        return $firstOperand + $secondOperand;
    }

}