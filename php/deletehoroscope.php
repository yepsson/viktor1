<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    if (isset($_SESSION["mittHoroscop"])){
    
        unset($_SESSION["mittHoroscop"]); 

        $key= true;
        echo "$key";

    }
    else{
    
        $key= false;
        echo "$key";
    }
}

else{
echo "error";
}


?>