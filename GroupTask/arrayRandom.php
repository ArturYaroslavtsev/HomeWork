<?php 

function skillPoint(){
	//массив навыков
	$special = ['Strength', 'Perception', 'Endurance', 'Charisma', 'Intelligence', 'Agility', 'Luck'];
	//преобразовуем массивы навыков в переменные
	foreach ($special as $key => $skill) {
		//назначаем случайные цифры
		$rand_num = array(rand(1, 10));
			//преобразовуем массивы цифр в переменные
			foreach ($rand_num as $key => $num){
				//выводим на экран
				echo "$skill = $num <br \>";
			}
	}
}echo skillPoint();
