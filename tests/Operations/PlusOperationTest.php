<?php

namespace iSoftBetTest\Operations;

use iSoftBet\Calculator;
use PHPUnit\Framework\TestCase;

class PlusOperationTest extends TestCase
{
    public function test_calling_calculator_with_plus_operation_should_return_the_sum(): void
    {
        $calculator = new Calculator();

        $result = $calculator->calculate('plus', 2, 7);

        $this->assertEquals(9, $result);
    }

    public function test_calling_calculator_with_plus_operation_with_multiple_operands_should_return_the_sum(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(6, $calculator->multipleCalculate('plus', [1, 2, 3]));
    }

    public function test_multiple_calculation_should_raise_exception_if_lists_of_operands_has_only_one_value(): void
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('You need at least 2 operands to do this operation.');

        $calculator->multipleCalculate('plus', [1]);
    }
}