<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_SESSION["mittHoroscop"])){
        echo $_SESSION["mittHoroscop"];
    }
}
else{
echo "error";
}

?>