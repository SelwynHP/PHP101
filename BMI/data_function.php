<?php
    function valid_int($num){
        $valid = false;
        if(filter_var($num, FILTER_VALIDATE_INT)){
            if($num >= 0){
                $valid = true;
            }
        }
        return $valid;
    }
    function valid_weight($weight){
        $valid = false;
        if(isset($weight)){
            if(valid_int($weight)){
                $valid = true;
            }
        }
        return $valid;
    }
    function valid_height($height){
        $valid = false;
        if(isset($height)){
            if(valid_int($height)){
                $valid = true;
            }
        }
        return $valid;
    }
    function valid_bmi_entry($weight,$height){
        $valid = false;
        if(valid_weight($weight) && valid_height($height)){
            $valid = true;
        }
        return $valid;
    }
    function calc_bmi($weight,$height){
        //Converting cm to m
        $height = $height / 100;

        $result = ($weight / (pow($height,2)));
        return $result;
    }
    function convert_lbTokg($weight){
        return $weight / 2.205;
    }
    function convert_inTocm($height){
        return $height * 2.54;
    }
?>