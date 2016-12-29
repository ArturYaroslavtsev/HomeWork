<?php

echo "If you love juice, press 1!\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo "\n";

echo ($input == 1) ? "Well done!" : "Drink Compote :)"; 

echo "\n";