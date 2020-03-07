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
		$cars = array(
		array("Year"=>2014,"Make"=>"Jeep","Model"=>"Grand-Cherokee","Price"=>48314,"KM"=>70000,"Color"=>"BLACK","Image"=>"Jeep.jpg"),
		array("Year"=>2016,"Make"=>"BWM","Model"=>"X5-M","Price"=>48314,"KM"=>70000,"Color"=>"White","Image"=>"BMW.jpg"),
		array("Year"=>2015,"Make"=>"Acura","Model"=>"MDX","Price"=>60876,"KM"=>50000,"Color"=>"BLACK","Image"=>"ACURA.jpg"),
		array("Year"=>2016,"Make"=>"Honda","Model"=>"Pilot","Price"=>46320,"KM"=>60,"Color"=>"Silver","Image"=>"Honda.jpg"),
		array("Year"=>2015,"Make"=>"Audi","Model"=>"Q3","Price"=>30988,"KM"=>40000,"Color"=>"BLACK","Image"=>"Audi.jpg")
		);
		return $cars;
	}
	function init2(){
		$age = array("Peter"=>"35", "Joe"=>"43");    // OR  $age['Peter'] = "35";  $age['Joe'] = "43";
		return $age;
	}
?>