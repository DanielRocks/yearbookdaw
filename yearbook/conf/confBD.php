<?php
 function conn_mysql(){

   try {
	   $conn = new PDO ( "mysql:host=tcp:vf2yfajnje.database.windows.net;port=1433; dbname=mysql", "danielrocksu", "Yearbook2015");
	   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	   }
	   
	   catch ( PDOException $e ) {
		   print( "Error connecting to SQL Server." );
		   die(print_r($e));
		   }
   }
?>