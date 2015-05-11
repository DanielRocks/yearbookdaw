<?php
 function conn_mysql(){

    $host = "br-cdbr-azure-south-a.cloudapp.net";
    $user = "bce57962034b55";
    $pwd = "ff0b7710";
    $db = "yearbookdaw";
    // Connect to database.
    try {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(var_dump($e));
    }
   }
?>