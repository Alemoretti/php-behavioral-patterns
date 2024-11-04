<?php

namespace Ale\DesignPattern\Taxes;

use Ale\DesignPattern\Budget;

class Ikcv extends TaxWithTwoRates
{
    protected function shouldApplyMaxRate(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->itemsQuantity > 3;
    }

    protected function calculateMaxRate(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateMinRate(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}