<?php

namespace iSoftBetTes;

use iSoftBet\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_calling_calculator_with_unknown_operation_should_throw_exception(): void
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid Operation.');

        $calculator->calculate('unknown', 0, 0);
    }
}
