<?php
    /*shared.functions.php*/
    
    function post($key, $default){
        $value = isset($_POST[$key]) ? $_POST[$key] : $default;
        return $value;
    }

    function money($number){
        return $formattedNum = number_format($number, 2);
    }

    function get($key, $default){
        $value = isset($_GET[$key]) ? $_GET[$key] : $default;
        return $value;
    }

?>