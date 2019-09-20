<?php

namespace iSoftBet;

use iSoftBet\Operations\DivisionOperation;
use iSoftBet\Operations\MinusOperation;
use iSoftBet\Operations\MultiplicationOperation;
use iSoftBet\Operations\PlusOperation;
use RuntimeException;

class OperationFactory
{
    /**
     * This method to get the operation to be executed
     *
     * @param string $operation
     * @return IOperation
     */
    public static function getOperation(string $operation): IOperation
    {
        switch ($operation) {
            case 'plus':
                return new PlusOperation();

            case 'minus':
                return new MinusOperation();

            case 'multiply':
                return new MultiplicationOperation();

            case 'divide':
                return new DivisionOperation();

            default:
                throw new RuntimeException('Operation not found.');
        }
    }
}
