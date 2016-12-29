<?php

	echo "Enter you first number ... \n";
$handle = fopen ("php://stdin","r");
$f = fgets($handle); // $f- сокрашение слова "fizz"
	echo "Enter you second number ... \n";
$b = fgets($handle); // $b- сокрашение слова "buzz"
	echo "Enter you last number ... \n";
$fb = fgets($handle); // $fb- сокрашение слова "fizzbuzz"

echo "\n";

for ($int=1; $int<=$fb; $int++) {
    $int1 = $int % $f; 
    $int2 = $int % $b;
    echo (!$int1 && !$int2 ? "FB" : (!$int1 ? "F" : (!$int2 ? "B" : $int))). " ";
}