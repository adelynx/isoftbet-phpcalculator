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

    /**
     * This method calculate an operation with multiple operands
     *
     * @param array $operands
     * @return float
     */
    public function multipleCalculate(array $operands): float;
}