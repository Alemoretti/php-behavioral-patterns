<?php

namespace Ale\DesignPattern\Taxes;

use Ale\DesignPattern\Budget;

abstract class TaxWithTwoRates implements Tax
{
    public function calculateTax (Budget $budget): float
    {
        if ($this->shouldApplyMaxRate($budget)) {
            return $this->calculateMaxRate($budget);
        }

        return $this->calculateMinRate($budget);
    }

    abstract protected function shouldApplyMaxRate(Budget $budget): bool;
    abstract protected function calculateMaxRate(Budget $budget): float;
    abstract protected function calculateMinRate(Budget $budget): float;
}