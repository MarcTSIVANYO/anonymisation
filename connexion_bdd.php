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
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
