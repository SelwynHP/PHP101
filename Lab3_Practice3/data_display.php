<?php
	function parse_string($string){
		$string = trim($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
	}
	function calc_net($salary){
		switch($salary){
			case ($salary < 42390):
				$rate = 16;
			break;
			case ((42390 < $salary) && ($salary < 84780)):
				$rate = 20;
			break;
			case ((84780 < $salary) && ($salary< 103150)):
				$rate = 24;
			break;
			case ($salary > 103150):
				$rate = 25.75;
			break;
			default:
			echo "Error!";
		}
		$tax = ($salary * $rate)/100;
		return $tax;
	}
?>