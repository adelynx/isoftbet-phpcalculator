<?php

namespace iSoftBetTest\Operations;

use iSoftBet\Calculator;
use PHPUnit\Framework\TestCase;

class MultiplicationOperationTest extends TestCase
{
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

    public function test_calling_calculator_with_multiple_operands_should_return_the_multiplication(): void
    {
        $calculator = new Calculator();

        $this->assertEquals(0, $calculator->multipleCalculate('multiply', [1, 1, 0]));
        $this->assertEquals(0, $calculator->multipleCalculate('multiply', [0, 0, 1]));
        $this->assertEquals(0, $calculator->multipleCalculate('multiply', [0, 16, 2]));
        $this->assertEquals(0, $calculator->multipleCalculate('multiply', [16, 0, 3]));
        $this->assertEquals(-20, $calculator->multipleCalculate('multiply', [-1, 5, 4]));
        $this->assertEquals(-25, $calculator->multipleCalculate('multiply', [5, -1, 5]));
        $this->assertEquals(24, $calculator->multipleCalculate('multiply', [-2, -2, 6]));
    }

    public function test_multiple_calculation_should_raise_exception_if_lists_of_operands_has_only_one_value(): void
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('You need at least 2 operands to do this operation.');

        $calculator->multipleCalculate('multiply', [1]);
    }
}