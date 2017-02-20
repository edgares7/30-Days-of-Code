<?php
$stdin = fopen('php://stdin', 'r');

$mealCost = fgets($stdin);
$tipPercent = fgets($stdin);
$taxPercent = fgets($stdin);

$tip = $mealCost * ($tipPercent/100);
$tax = $mealCost * ($taxPercent/100);

$totalCost = $mealCost + $tip + $tax;

echo "The total meal cost is " . round($totalCost) . " dollars.";
?>