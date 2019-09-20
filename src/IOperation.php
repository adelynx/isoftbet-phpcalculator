<?php

namespace iSoftBet;

interface IOperation
{
    /**
     * This method calculate an operation with 2 operands
     *
     * @param float $FirstOperand
     * @param float $SecondOperand
     * @return float
     */

    public function Calculate(float $FirstOperand, float $SecondOperand): float;

}