<?php
parse_str(file_get_contents("php://input"), $_PUT);

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    
    if (isset($_SESSION["mittHoroscop"])){

        $_POST["socialnumber"] = $_PUT["socialnumber"];
        include "class.php";
        $_SESSION["mittHoroscop"] = $horoscope->printSign();

        $key= true;
        echo "$key";
    }
    if (!isset($_SESSION["mittHoroscop"])){

    
        $key= false;
        echo "$key";
    }
    
}

else{
    echo "error";
}


?>