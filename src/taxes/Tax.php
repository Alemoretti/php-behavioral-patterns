<?php

namespace Ale\DesignPattern\Taxes;

use Ale\DesignPattern\Budget;

interface Tax{
    public function calculate(Budget $budget): float;
}