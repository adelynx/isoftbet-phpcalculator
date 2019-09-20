<?php

namespace iSoftBet;

class Calculator
{
    /**
     * This method do the calculation and return the result
     *
     * @param string $operationName
     * @param float $firstOperand
     * @param float $secondOperand
     * @return float
     */
    public function calculate(
        string $operationName,
        float $firstOperand,
        float $secondOperand
    ): float {
        $operationFactory = new OperationFactory();

        $operation = $operationFactory::getOperation($operationName);

        return $operation->calculate($firstOperand, $secondOperand);
    }
}