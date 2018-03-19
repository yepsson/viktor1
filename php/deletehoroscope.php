<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    if (isset($_SESSION["mittHoroscop"])){
    
        unset($_SESSION["mittHoroscop"]); 
        echo "Your Horoscope are now deleted";
    }
    else{
        echo " There is no Horoscope to delete!";
    }
}

else{
echo "error";
}


?>