<?php

echo "\nHow old are you?\n";
$handle = fopen ("php://stdin","r");
$y = fgets($handle); //$y - сокрашение слова "years"

switch ($y) {
 	case $y<18:
		echo "\nYou still BABY\n"; // выводит текст "Ты еще ребенок"
 			break;
 	case $y>=18 && $y<=33:
 		echo "\nYou are YOUNG\n"; // выводит текст "Ты еще Молод"
 			break;
 	case $y>33 && $y<=60:
 		echo "\nYou are an ADULT\n"; //выводит текст "Ты уже Взрослый"	
 			break;
 	case $y>60 && $y<=100:
 		echo "\nYou are OLD\n"; // выводит текст "Ты уже Старый"
 			break;
 	default : echo "\nGlad that you Familiar With\n"; // выводит текст "Рад что знаком с тобой"
 }
 echo "\n";