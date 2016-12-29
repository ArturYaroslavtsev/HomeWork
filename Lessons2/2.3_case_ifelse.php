<?php
echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);
switch ($mark) {
    case 2:
        echo "I am better!!";
        break;
    case 3:
        echo "OK :(";
        break;
    case 4:
        echo "I am good :)";
        break;
    case 5:
        echo "YeeeeWhaaaa!!!!";
        break;
} 
echo "\n";
