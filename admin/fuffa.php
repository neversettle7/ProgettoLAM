<?php

include_once ("../include/functions.php");

$query = ("SELECT * FROM utenti");

echo "<p>Lista categorie: </p>";

if (isset($query)) {
	$connection = connect();
	$result = dbReaderQuery($query);
	//$numero = count($result);
	//echo "<p>" . $numero;
	foreach ($result as $key => $value) {
		echo "<p>".$value['nome'];
	}
} else
	echo "Errore nella query.";
?>