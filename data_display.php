<?php
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
				$value = parse_data($value); 
			} */

			//Generating Collections
			$headerCount = count($header);
			if(count($str) == $headerCount){
				$arr = array();
				for($i = 0;$i < $headerCount; $i++){
					$arr[$header[$i]] = $str[$i];
				}
				array_push($array,$arr);
			}
		}
		fclose($file);
		return $array;
	}
?>