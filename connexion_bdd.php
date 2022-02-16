<?php
   try
	{
	 	$dbtype ='mysql'; 
	    $host = 'localhost'; 
	    $user = 'id18452998_root'; 
	    $pass = 'I\o?Eu#\}Kr]CY1o'; 
	    $database = 'id18452998_desanonymisation'; 
	    $dns = $dbtype.':dbname='.$database.";host=".$host; 
	    $dbh = new PDO( $dns, $user, $pass ); 
	   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
