<?php
 function conn_mysql(){

   $servidor = 'localhost';
   $porta = 1433;
   $banco = "daw_yearbook";
   $usuario = "root";
   $senha = "";
   
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