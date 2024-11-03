<?php

namespace Ale\DesignPattern\Discounts;

use Ale\DesignPattern\Budget;

class MoreThan5ItemsDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itemsQuantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}