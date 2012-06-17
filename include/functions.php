<?php

// Libreria per le funzioni esterne

function connect($query) {

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "root";
	$db_name = "lamdb";

	// Connessione al database

	//function db_connect() {
		//include_once ("config.inc.php");
		$connection = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());

		echo $query;

		mysql_select_db($db_name) or die(mysql_error());
		
		if (mysql_query($query, $connection))
			echo "query avvenuta con successo.";
		else "query venuta male: ".mysql_error();
		
		if(isset($query))
			echo "connessione avvenuta con query";
		else
			echo "connessione avvenuta senza query";
		
		return $connection;
	//}

}

function db_edit($query) {
	echo $query;
	mysql_query($query, $connection);	
}
?>