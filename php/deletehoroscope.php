<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    if (isset($_SESSION["mittHoroscop"])){
    
        unset($_SESSION["mittHoroscop"]); 
        echo "Your Horoscope is now deleted!";
    }
    else{
        echo " There is no Horoscope to Delete!";
    }
}

else{
echo "error";
}


?>