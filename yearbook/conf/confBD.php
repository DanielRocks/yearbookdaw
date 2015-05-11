<?php
 function conn_mysql(){

   $servidor = 'br-cdbr-azure-south-a.cloudapp.net';
   $porta = 1433;
   $banco = "yearbookdaw";
   $usuario = "danielrocksu@g48e0yh47b\";
   $senha = "1234";
   
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