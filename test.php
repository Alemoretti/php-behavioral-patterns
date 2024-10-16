<?php

use Ale\DesignPattern\Budget;
use Ale\DesignPattern\DiscountCalculator;
use Ale\DesignPattern\TaxCalculator;
use Ale\DesignPattern\Taxes\Icms;

require 'vendor/autoload.php';

//$calculator = new TaxCalculator();

//$budget = new Budget();
//$budget->value = 100;

//echo $calculator->calculate($budget, new Iss())

$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->value = 600;
$budget->itemsQuantity = 5;

echo $calculator->calculateDiscount($budget);

?>