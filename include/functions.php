<?php

/*
 * LIBRERIA CONTENENTE LE FUNZIONI ESTERNE UTILIZZABILI
 */

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

	// Check - "<p>Collegato con successo.</p>";

	// Check - echo $query;

	mysql_select_db($db_name) or die(mysql_error());

	if (mysql_query($query, $connection)) {
		$ok = 1;
		//echo "Query avvenuta con successo.";
	} else {
		$ok = 0;
		"<p>Query non avvenuta con successo: " . mysql_error() . ".</p>";
	}

	return $connection;
	//}

}

// Questa funzione serve per effettuare operazioni nel db

function db_edit($query, $connection) {
	// Check - echo $query;
	mysql_query($query, $connection);
}

// Questa funzione serve per effettuare letture nel db
// inserisce i risultati della lettura in un array multidimensionale
// (quello che viene ritornato con il nome $toReturn)

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
// ci è utile quando vogliamo manipolare i nomi dei file che vengono uppati
// per evitare la sovrascrittura di file con nomi uguali

function findext($nomefile) {
	$nomefile = strtolower($nomefile);
	$ext = split("[/\\.]", $nomefile);
	$n = count($ext) - 1;
	$ext = $ext[$n];
	return $ext;
}

// Questa funzione serve per controllare i permessi di amministratore ed evitare
// l'accesso alle pagine del backend a chi non è loggato come amministratore

function adminlogin($admin) {
	// Se l'utente non è amministratore
	if ($admin != 1) {
		/*
		 * Questi vecchi controlli servivano a far raggiungere specifiche pagine
		 * ottenendo l'indirizzo attuale (dominio + path).
		 * Si è deciso di ottenere una via più breve con una generica pagina di login
		 * anche nel backend che rimanda al controllo per il login nel frontend.
		 * Per tornare al backend è sufficiente usare i collegamenti presenti nel frontend.
		 * 
		$domain = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		$domainA = @explode("/", $domain);
		// Check - print_r($domainA);
		//$i = count($domainA);
		for ($j = 0, $i = count($domainA); $j < ($i - 1); $j++) {
			if ($j == 0) {
				$domainB = $domainA[$j];
			} else {
				$domainB = $domainB . '/' . $domainA[$j];
			}
		}
		$domainB = $domainB . '/';
		// Check - echo '<p>' . $domainB;
		//header("Location: $domainB/login.php");*/
		header("Location: login.php");
		return;
	}
}

function checklogin($login) {
	if ($login != 1) {
		header("Location: login.php");
		return;
	}
}

/*
 * La funzione elencata qui di seguito serve per la gestione del carrello
 * ATTENZIONE: la funzione non è più usata ma è stata lasciata qui
 * per comodità e per un possibile riutilizzo
 */

function writeShoppingCart() {
	$cart = $_SESSION['cart'];
	if (!$cart) {
		return '<p>Non ci sono elementi nel tuo carrello.</p>';
	} else {
		/*
		 * La funzione explode divide la stringa ogni volta che trova un carattere
		 * particolare - in questo caso una virgola. Usiamo la @ davanti al nome
		 * della funzione perchè gli argomenti della funzione stessa non sono completi
		 * (mancherebbe il numero massimo di elementi dell'array)
		 * Usage: array explode ( string $delimiter , string $string [, int $limit ] )
		 * http://php.net/manual/en/function.explode.php
		 */
		$items = @explode(',', $cart);
		$contents = array();
		foreach ($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		return '<p>Ci sono <a href="cart.php">' . count($items) . ' elementi nel tuo carrello</a></p>';
	}
}
?>