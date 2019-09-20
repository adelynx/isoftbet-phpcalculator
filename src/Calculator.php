<?php

namespace iSoftBet;

class Calculator
{
    /**
     * This method do the calculation and return the result
     * TODO:: PS: I could take ride off this method as the multipleCalculate() does the same job
     *      but in fact I left it as I could have in my API as example an end point just with 2
     *      operands. So, to make my work easy is good to have the calculate() method to be called
     *      when I have just operands to be calculated.
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

    /**
     * This method do the multiple calculation and return the result
     *
     * @param string $operationName
     * @param array $operands
     * @return float
     */
    public function multipleCalculate(
        string $operationName,
        array $operands
    ): float {
        $operationFactory = new OperationFactory();

        $operation = $operationFactory::getOperation($operationName);

        return $operation->multipleCalculate($operands);
    }
}