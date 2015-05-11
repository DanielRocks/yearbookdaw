<?php
 function conn_mysql(){

    $host = "us-cdbr-azure-west-b.cleardb.com";
    $user = "b1b19373d87a2d";
    $pwd = "48305f92";
    $db = "as_fc41adb7ec196d0";
	$porta = 1433;
    // Connect to database.

	      $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      return $conn;
 }
?>