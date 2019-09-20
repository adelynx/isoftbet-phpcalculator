<?php

namespace iSoftBetTes;

use DivisionByZeroError;
use InvalidArgumentException;
use iSoftBet\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_calling_calculator_with_plus_operation_should_return_the_sum(): void
    {
        $calculator = new Calculator();

        $result = $calculator->calculate('plus', 2, 7);

        $this->assertEquals(9, $result);
    }

    public function test_calling_calculator_with_unknown_operation_should_throw_exception(): void
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid Operation.');

        $calculator->calculate('unknown', 0, 0);
    }

    public function test_division_by_zero_should_raise_exception(): void
    {
        $calculator = new Calculator();

        $this->expectException(DivisionByZeroError::class);
        $this->expectExceptionMessage('Division by 0 is not supported.');

        $calculator->calculate('divide', 16, 0);
    }

    public function test_calling_calculator_with_multiply_operation_should_return_the_multiplication(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(1, $calculator->calculate('multiply', 1, 1));
        $this->assertEquals(0, $calculator->calculate('multiply', 0, 0));
        $this->assertEquals(0, $calculator->calculate('multiply', 0, 16));
        $this->assertEquals(0, $calculator->calculate('multiply', 16, 0));
        $this->assertEquals(-5, $calculator->calculate('multiply', -1, 5));
        $this->assertEquals(-5, $calculator->calculate('multiply', 5, -1));
        $this->assertEquals(4, $calculator->calculate('multiply', -2, -2));
    }

    public function test_calling_calculator_with_plus_operation_with_multiple_operands_should_return_the_sum(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(6, $calculator->multipleCalculate('plus', [1, 2, 3]));
    }

    public function test_calling_calculator_with_minus_operation_with_multiple_operands_should_return_the_subtraction(
    ): void
    {
        $calculator = new Calculator();

        $this->assertEquals(10, $calculator->multipleCalculate('minus', [16, 2, 4]));
    }

    public function test_calling_calculator_with_divide_operation_with_multiple_operands_should_return_the_division(
    ): void
    {
        $calculator = new Calculator();

        $this->assertEquals(2, $calculator->multipleCalculate('divide', [16, 2, 4]));
        $this->assertEquals(1 / 9, $calculator->multipleCalculate('divide', [9, 9, 9]));
    }
}
