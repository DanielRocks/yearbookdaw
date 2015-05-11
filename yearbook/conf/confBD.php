<?php
 function conn_mysql(){

   $servidor = 'tcp:vf2yfajnje.database.windows.net';
   $porta = 1433;
   $banco = "yearbookdaw";
   $usuario = "danielrocksu";
   $senha = "Yearbook2015";
   
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