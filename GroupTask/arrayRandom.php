<?php 

function skillPoint(){
	$special = ['Strength', 'Perception', 'Endurance', 'Charisma', 'Intelligence', 'Agility', 'Luck'];
	foreach ($special as $key => $skill) {
		$rand_num = array(rand(1, 10));
			foreach ($rand_num as $key => $num){
				echo "$skill = $num <br \>";
			}
	}
}echo skillPoint();