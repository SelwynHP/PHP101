<?php
	function multiply($num1,$num2){
		$result = $num1 * $num2;
		return $result;
	}
	function parse_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function initial_array(){
		$cars[0][0] = array(Year=>2014,Make=>Jeep,Model=>Grand-Cherokee,Price=>48314,KM=>70000,Color=>BLACK,Image=>Jeep.jpg);
		$cars[0][1] = array(Year=>2016,Make=>BWM,Model=>X5-M,Price=>126000,KM=>90,Color=>White,Image=>BMW.jpg);
		$cars[0][2] = array(Year=>2016,Make=>BWM,Model=>X5-M,Price=>126000,KM=>90,Color=>White,Image=>BMW.jpg);
		$cars[0][3] = array(Year=>2016,Make=>BWM,Model=>X5-M,Price=>126000,KM=>90,Color=>White,Image=>BMW.jpg);
		$cars[0][4] = array(Year=>2016,Make=>BWM,Model=>X5-M,Price=>126000,KM=>90,Color=>White,Image=>BMW.jpg);
		2015 , Acura , MDX           , 60876  ,50000   , BLACK , ACURA.jpg
		2016 , Honda , Pilot         , 46320  ,60      , Silver, Honda.jpg
		2015 , Audi  , Q3            , 30988  ,40000   , BLACK , Audi.jpg
	}
?>