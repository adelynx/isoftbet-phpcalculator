<?php

namespace iSoftBetTest\Operations;

use iSoftBet\Calculator;
use PHPUnit\Framework\TestCase;

class DivisionOperationTest extends TestCase
{
    public function test_division_by_zero_should_raise_exception(): void
    {
        $calculator = new Calculator();

        $this->expectException(\DivisionByZeroError::class);
        $this->expectExceptionMessage('Division by 0 is not supported.');

        $calculator->calculate('divide', 16, 0);
    }

    public function test_calling_calculator_with_divide_operation_with_2_operands_should_return_the_division(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(3, $calculator->calculate('divide', 6, 2));
        $this->assertEquals(-3, $calculator->calculate('divide', -6, 2));
        $this->assertEquals(-3, $calculator->calculate('divide', 6, -2));
        $this->assertEquals(0, $calculator->calculate('divide', 0, 2));
        $this->assertEquals(0, $calculator->calculate('divide', 0, -2));
    }

    public function test_calling_calculator_with_divide_operation_with_multiple_operands_should_return_the_division(
    ): void
    {
        $calculator = new Calculator();

        $this->assertEquals(2, $calculator->multipleCalculate('divide', [16, 2, 4]));
        $this->assertEquals(1 / 9, $calculator->multipleCalculate('divide', [9, 9, 9]));
    }

    public function test_multiple_calculation_division_by_zero_should_raise_exception_if_lists_of_operands_has_a_zero_value(
    ): void
    {
        $calculator = new Calculator();

        $this->expectException(\DivisionByZeroError::class);
        $this->expectExceptionMessage('Division by 0 is not supported.');

        $calculator->multipleCalculate('divide', [123, 1337, 23, 0, 54]);
    }

    public function test_multiple_calculation_should_raise_exception_if_lists_of_operands_has_only_one_value(): void
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('You need at least 2 operands to do this operation.');

        $calculator->multipleCalculate('divide', [1]);
    }
}