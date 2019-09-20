<?php

namespace iSoftBet;

interface IOperation
{
    /**
     * This method calculate an operation with 2 operands
     *
     * @param float $firstOperand
     * @param float $secondOperand
     * @return float
     */

    public function calculate(float $firstOperand, float $secondOperand): float;

}