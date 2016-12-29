<?php

echo "\nHow old are you?\n";
$handle = fopen ("php://stdin","r");
$y = fgets($handle); //$y - сокрашение слова "years"

if ($y < 18) {
	echo "\nYou still BABY\n"; // выводит текст "Ты еще ребенок"
}	elseif (($y >= 18) && ($y < 33)) {
		echo "\nYou are YOUNG\n"; // выводит текст "Ты еще Молод"
}	elseif (($y >= 33) && ($y < 60)) {
		echo "\nYou are an ADULT\n"; //выводит текст "Ты уже Взрослый"
}	elseif (($y >= 60) && ($y < 100)) {
		echo "\nYou are OLD\n"; // выводит текст "Ты уже Старый"
}	else {
		echo "\nGlad that you Familiar With\n"; // выводит текст "Рад что знаком с тобой"
}
echo "\n";
