<?php

session_start();

include "class.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(!isset($_SESSION["mittHoroscop"])){
        $sign = $horoscope->printSign();

        if($sign === false){
            echo "false";}
        else{
            $_SESSION["mittHoroscop"] = $sign;}
    }
}
else{
    echo "error";
}


?>