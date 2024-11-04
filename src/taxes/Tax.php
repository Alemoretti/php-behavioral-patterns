<?php

namespace Ale\DesignPattern\Taxes;

use Ale\DesignPattern\Budget;

interface Tax{
    public function calculateTax(Budget $budget): float;
}