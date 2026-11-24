<?php
namespace Core;
class Validate{
    public static function string($value, $min = 1, $max = 'NFC'){
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;

    }

    public static function email($value){
        return filter_var(trim($value), FILTER_VALIDATE_EMAIL);
    }
}