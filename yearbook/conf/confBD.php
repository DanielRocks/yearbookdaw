<?php
 function conn_mysql(){

   $servidor = 'br-cdbr-azure-south-a.cloudapp.net';
   $porta = 1433;
   $banco = "yearbookdaw";
   $usuario = "danielrocksu@vf2yfajnje";
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