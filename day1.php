<?php
$handle = fopen("php://stdin", "r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
$a;
$b;
$c;

// Read and save an integer, double, and String to your variables.
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
// Print the sum of both integer variables on a new line.
echo $i + $a . "\n";
// Print the sum of the double variables on a new line.
$z = $d + $b;
echo $english_format_number = number_format($z, 1) . "\n";
// Concatenate and print the String variables on a new line
echo $s . $c;
// The 's' variable above should be printed first.

fclose($handle);
?>