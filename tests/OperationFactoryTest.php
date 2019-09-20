<?php

namespace iSoftBetTest;

use iSoftBet\Calculator;
use iSoftBet\OperationFactory;
use iSoftBet\Operations\DivisionOperation;
use iSoftBet\Operations\MinusOperation;
use iSoftBet\Operations\MultiplicationOperation;
use iSoftBet\Operations\PlusOperation;
use PHPUnit\Framework\TestCase;

class OperationFactoryTest extends TestCase
{
    public function test_divide_operation_get_instance_of_division_operation_class(): void
    {
        $operationFactory = new OperationFactory();

        $operation = $operationFactory::getOperation('divide');

        $this->assertInstanceOf(DivisionOperation::class, $operation);
    }

    public function test_minus_operation_get_instance_of_Minus_operation_class(): void
    {
        $operationFactory = new OperationFactory();

        $operation = $operationFactory::getOperation('minus');

        $this->assertInstanceOf(MinusOperation::class, $operation);
    }

    public function test_multiply_operation_get_instance_of_multiplication_operation_class(): void
    {
        $operationFactory = new OperationFactory();

        $operation = $operationFactory::getOperation('multiply');

        $this->assertInstanceOf(MultiplicationOperation::class, $operation);
    }

    public function test_plus_operation_get_instance_of_plus_operation_class(): void
    {
        $operationFactory = new OperationFactory();

        $operation = $operationFactory::getOperation('plus');

        $this->assertInstanceOf(PlusOperation::class, $operation);
    }

    public function test_unknown_operation_should_throw_exception(): void
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid Operation.');

        $calculator->calculate('unknown', 0, 0);
    }
}