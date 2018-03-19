<?php
parse_str(file_get_contents("php://input"), $_PUT);
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
    if(!isset($_SESSION["mittHoroscop"])){
        $key = false;
        echo "$key";
    }
    if(isset($_SESSION["mittHoroscop"])){
        $key = 'invalid';
        
        $_POST["socialnumber"] = $_PUT["socialnumber"];
        include "class.php";
        
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