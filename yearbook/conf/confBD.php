<?php
 function conn_mysql(){

   $servidor = 'tcp:vf2yfajnje.database.windows.net';
   $porta = 1433;
   $banco = "mysql";
   $usuario = "danielrocksu@vf2yfajnje";
   $senha = "Yearbook2015";
   
      $conn = new PDO("sqlsrv:server = tcp:vf2yfajnje.database.windows.net,1433; Database = mysql", "danielrocksu@vf2yfajnje", "Yearbook2015",
					   array(PDO::ATTR_PERSISTENT => true)
					   );
      return $conn;
   }
?>