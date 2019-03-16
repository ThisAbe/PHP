<?php
$name= $_POST['name'];
$email= $_POST['email'];
$weapon= $_POST['weapon'];
$gender= $_POST['gender'];
$battlecry= $_POST['battlecry'];

if(($name != NULL) AND ($email != NULL) AND ($weapon != NULL)){
	if(ISSET($gender)){
		if($battlecry != NULL){
			echo "Welcome, ".$name.". Your first opponent will be a 
			million turtles with a pet coffee elemental";
		}
		else{
			echo "You forgot your battle cry which is necessary strike fear
			and despair into your opponents";
			
		}
	}
	else{
		echo "You forgot to select your gender";
	}	
}
else{
	echo "You left a required field empty";
}









?>