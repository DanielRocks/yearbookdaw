<?php
 function conn_mysql(){

   try {
	   $conn = new PDO ( "sqlsrv:server = tcp:vf2yfajnje.database.windows.net,1433; Database = mysql", "danielrocksu", "Yearbook2015")
	   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	   }
	   
	   catch ( PDOException $e ) {
		   print( "Error connecting to SQL Server." );
		   die(print_r($e));
		   }
   }
?>