<?php
session_start();
include "class.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION["mittHoroscop"])){
        $key = false;
        echo "$key";
    }
    if(!isset($_SESSION["mittHoroscop"])){
        $key = 'invalid';
        
        if($horoscope->isValid()){
            $_SESSION["mittHoroscop"] = $horoscope->printSign();
            $key = true;
        }
        
        echo "$key";
    }
}
else{
    echo "error";
}
?>