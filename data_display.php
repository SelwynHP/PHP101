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
	function array_man_init(){
		$cars = array(
		array("Year"=>2014,"Make"=>"Jeep","Model"=>"Grand-Cherokee","Price"=>48314,"KM"=>70000,"Color"=>"BLACK","Image"=>"Jeep.jpg"),
		array("Year"=>2016,"Make"=>"BWM","Model"=>"X5-M","Price"=>126000,"KM"=>90,"Color"=>"White","Image"=>"BMW.jpg"),
		array("Year"=>2015,"Make"=>"Acura","Model"=>"MDX","Price"=>60876,"KM"=>50000,"Color"=>"BLACK","Image"=>"ACURA.jpg"),
		array("Year"=>2016,"Make"=>"Honda","Model"=>"Pilot","Price"=>46320,"KM"=>60,"Color"=>"Silver","Image"=>"Honda.jpg"),
		array("Year"=>2015,"Make"=>"Audi","Model"=>"Q3","Price"=>30988,"KM"=>40000,"Color"=>"BLACK","Image"=>"Audi.jpg")
		);
		return $cars;
	}
	function array_auto_init(){
		$array = array();
		$filePath = "C:/xampp/htdocs/Test/images/cars.txt"; //Windows Version
		//$filePath = "/opt/lampp/htdocs/Test/images/cars.txt"; //Linux Version

		//==============Parsing File==============
		$file = fopen($filePath,"r");
		while(! feof($file)){
			$line = trim(fgets($file));
			//Check first line for headers
			if(preg_match("/^(\w+\s*)+$/",$line,$matches)){
				$header = preg_split('/\s+/',$matches[0]);
			}
			//Split line into tokens
			$str = preg_split('/,/', $line);

			//Trim() data
			/* foreach($str as $value){
				$value = trim($value); 
			} */

			//Generating Collections
			if(count($str) == 7){
				$arr = array($header[0]=>$str[0],$header[1]=>$str[1],$header[2]=>$str[2],$header[3]=>$str[3],$header[4]=>$str[4],$header[5]=>$str[5],$header[6]=>$str[6]);
				array_push($array,$arr);
			}
		}
		fclose($file);
		return $array;
	}
?>