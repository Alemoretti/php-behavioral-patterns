<?php

namespace Ale\DesignPattern;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itemsQuantity > 5) {
            return $budget->value * 0.1;
        }

        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }
        return 0;
    }
}