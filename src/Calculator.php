<?php

namespace iSoftBet;

class Calculator
{
    /**
     * @var OperationFactory
     */
    private $operationFactory;

    /**
     * Calculator constructor.
     *
     * @param OperationFactory $operationFactory
     */
    public function __construct(OperationFactory $operationFactory)
    {
        $this->operationFactory = $operationFactory;
    }

    public function Calculate(
        string $operationName,
        float $firstOperand,
        float $secondOperand
    ): float {
        $operation = $this->operationFactory::getOperation($operationName);

        return $operation->calculate($firstOperand, $secondOperand);
    }
}