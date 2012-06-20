/* Script per l'inserimento dei prodotti nel database */

<!-- verifichiamo che i dati inviati dalla pagina login.php siano ricevuti correttamente !-->

<p>Nome: <?php echo $_POST['nome']; ?></p>
<p>Descrizione: <?php echo $_POST['descrizione']; ?></p>

<!-- assegniamo i valori alle variabili php per preprarare l'inserimento nel db !-->

<?php

include_once '../include/functions.php';

$nome = $_POST['nome'];
$descrizione = $_POST['descrizione'];

// query di inserimento del prodotto

$mysql_query = ("INSERT INTO categorie (nome, descrizione) VALUES ('$nome', '$descrizione')");

echo $mysql_query;

if (isset($mysql_query)) {
	$connection = connect($mysql_query);
	echo "SI query";
} else {
	echo "Errore acquisizione dati.";
	
echo "<p>Fine script.</p>";

// ci connettiamo al database ed eseguiamo la query


}

?>