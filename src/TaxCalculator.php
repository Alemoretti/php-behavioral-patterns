<?php

namespace Ale\DesignPattern;

use Ale\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float 
    {
        return $tax->calculate($budget);
    }
}