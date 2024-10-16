<?php

use Ale\DesignPattern\Budget;
use Ale\DesignPattern\TaxCalculator;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calculate($budget, 'ICMS')

?>