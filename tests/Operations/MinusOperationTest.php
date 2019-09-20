<?php

namespace iSoftBetTest\Operations;

use iSoftBet\Calculator;
use PHPUnit\Framework\TestCase;

class MinusOperationTest extends TestCase
{
    public function test_calling_calculator_with_minus_operation_with_2_operands_should_return_the_subtraction(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(14, $calculator->calculate('minus', 16, 2));
    }

    public function test_calling_calculator_with_minus_operation_with_multiple_operands_should_return_the_subtraction(
    ): void
    {
        $calculator = new Calculator();

        $this->assertEquals(10, $calculator->multipleCalculate('minus', [16, 2, 4]));
    }

    public function test_multiple_calculation_should_raise_exception_if_lists_of_operands_has_only_one_value(): void
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('You need at least 2 operands to do this operation.');

        $calculator->multipleCalculate('minus', [1]);
    }
}