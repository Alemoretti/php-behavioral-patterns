<?php

namespace Ale\DesignPattern;

use Ale\DesignPattern\Discounts\MoreThan500ValueDiscount;
use Ale\DesignPattern\Discounts\MoreThan5ItemsDiscount;
use Ale\DesignPattern\Discounts\NoDiscount;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        $discountChain = new MoreThan5ItemsDiscount(
            new MoreThan500ValueDiscount(
                new NoDiscount()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}