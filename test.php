<?php

use Ale\DesignPattern\Budget;
use Ale\DesignPattern\DiscountCalculator;
use Ale\DesignPattern\TaxCalculator;
use Ale\DesignPattern\Taxes\Icms;

require 'vendor/autoload.php';

$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->value = 600;
$budget->itemsQuantity = 6;

echo $calculator->calculateDiscount($budget);

?>