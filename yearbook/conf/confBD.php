<?php
 function conn_mysql(){

    $host = "us-cdbr-azure-west-b.cleardb.com";
    $user = "b1b19373d87a2d";
    $pwd = "48305f92";
    $db = "as_fc41adb7ec196d0";
    // Connect to database.

	      $conn = new PDO("mysql:host=$servidor;
	                   port=$porta;
					   dbname=$banco", 
					   $usuario, 
					   $senha,
					   array(PDO::ATTR_PERSISTENT => true)
					   );
      return $conn;
 }
?>