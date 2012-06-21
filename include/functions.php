<?php

// Libreria per le funzioni esterne


// Questa funzione serve per connettersi al db e effettuare operazioni

function connect($query) {

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "root";
	$db_name = "lamdb";

	// Connessione al database

	//function db_connect() {
	//include_once ("config.inc.php");
	$connection = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());

	//echo "<p>Collegato con successo.</p>";

	echo $query;

	mysql_select_db($db_name) or die(mysql_error());

	if (mysql_query($query, $connection))
		echo "Query avvenuta con successo.";
	else
		"Query venuta male: " . mysql_error();

	return $connection;
	//}

}


// Questa funzione serve per effettuare operazioni nel db

function db_edit($query) {
	echo $query;
	mysql_query($query, $connection);
}


// Questa funzione serve per effettuare letture nel db
 
function dbReaderQuery($query) {

	//echo "Sono la funzione dbReaderQuery";
	//echo "<p>Query ricevuta: " . $query;
	$result = mysql_query($query);
	//echo "<p>Result: ".$result;
	$toReturn = array();
	$i = 0;
	if ($result !== false) {
		while ($data = mysql_fetch_array($result, MYSQL_ASSOC)) {
			foreach ($data as $key => $value) {
				$toReturn[$i][$key] = $value;
				//echo "<p>Elemento dell'array numero ".$i." di valore: ".$value;
			}
			$i++;
		}
		return $toReturn;
	} else
		return false;
}


// Questa funzione separa l'estensione del file dal suo nome e la ritorna

function findext($nomefile) {
	$nomefile = strtolower($nomefile);
	$ext = split("[/\\.]", $nomefile);
	$n = count($ext) - 1;
	$ext = $ext[$n];
	return $ext;
}

?>