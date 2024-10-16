<?php

namespace Ale\DesignPattern\Taxes;

use Ale\DesignPattern\Budget;

class Icms implements Tax
{
    public function calculate(Budget $budget) : float
    {
        return $budget->value * 0.1;
    }
}