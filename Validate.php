<?php

class Validate{
    //this method  called pure function is not contingent or dependent upon state or values from the outside world
    public static function inputString($value, $min = 1, $max = INF){
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value){
      return  filter_var($value,FILTER_VALIDATE_EMAIL);
    }
}