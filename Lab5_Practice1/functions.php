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
		//$filePath = "C:/xampp/htdocs/PHP101/Lab5_Practice1/images/cars.txt"; //Windows Version
		$filePath = "/opt/lampp/htdocs/PHP101/Lab5_Practice1/images/cars.txt"; //Linux Version

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
			$str = array_map('trim',$str);
			/* foreach($str as $value){
				$value = trim($value); 
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
	function display($asArray){
		$DirPath = "C:/xampp/htdocs/PHP101/Lab5_Practice1/images/";

		for($i = 0;$i < count($asArray);$i++){
			$filePath = "images/".$asArray[$i]["Image"];

			$str = sprintf('
				<div style="width:526px;height:200px">
					<div style="width:250px;float:left">
						<img src="%s" style="height:200px;width:200px;">			<!--arg1-->
					</div>
					<div style="width:250px;float:right">
						<p>
							<font color=red size="4">
								%s,%s %s,%s											<!--arg2345-->
							</font>
							<br/><br/><br/>
							%s														<!--arg6-->
							<br/>
							%s KM													<!--arg7-->
						</p>
					</div>
				</div>
			',
			$filePath,
			$asArray[$i]["Year"],
			$asArray[$i]["Make"],
			$asArray[$i]["Model"],
			$asArray[$i]["Color"],
			$asArray[$i]["Price"],
			$asArray[$i]["KM"]
		);
			echo $str;
		}
	}
?>