<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    if (isset($_SESSION["mittHoroscop"])){
    
        unset($_SESSION["mittHoroscop"]); 
        echo "Ditt horoscope är nu borttaget";
    }
    else{
        echo " Det finns inget horoscope att ta bort";
    }
}

else{
echo "error";
}


?>