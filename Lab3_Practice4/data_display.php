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
?>