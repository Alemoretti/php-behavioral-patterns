<?php

namespace Ale\DesignPattern\Discounts;

use Ale\DesignPattern\Budget;

class MoreThan500ValueDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}