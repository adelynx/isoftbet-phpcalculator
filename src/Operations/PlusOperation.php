<?php

namespace iSoftBet\Operations;

use iSoftBet\IOperation;

class PlusOperation implements IOperation
{
    /**
     * This method calculate the addition of 2 operands
     *
     * @param float $FirstOperand
     * @param float $SecondOperand
     * @return float
     */
    public function Calculate(float $FirstOperand, float $SecondOperand): float
    {
        return $FirstOperand + $SecondOperand;
    }

}