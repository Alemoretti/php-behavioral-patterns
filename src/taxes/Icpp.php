<?php

namespace Ale\DesignPattern\Taxes;

use Ale\DesignPattern\Budget;

class Icpp extends TaxWithTwoRates
{
    protected function shouldApplyMaxRate(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaxRate(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calculateMinRate(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}