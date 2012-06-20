/* Script per l'inserimento dei prodotti nel database */

<!-- verifichiamo che i dati inviati dalla pagina login.php siano ricevuti correttamente !-->

<p>Nome: <?php echo $_POST['nome']; ?></p>
<p>Descrizione: <?php echo $_POST['descrizione']; ?></p>
<p>Quantità: <?php echo $_POST['quantita']; ?></p>
<p>Prezzo: <?php echo $_POST['prezzo']; ?></p>

<!-- assegniamo i valori alle variabili php per preprarare l'inserimento nel db !-->

<?php

include_once '../include/functions.php';

$nome = $_POST['nome'];
$descrizione = $_POST['descrizione'];
$quantita = $_POST['quantita'];
$prezzo = $_POST['prezzo'];

// query di inserimento del prodotto

$query = ("INSERT INTO prodotti (nome, descrizione, quantita, prezzo) VALUES ('$nome', '$descrizione', '$quantita', '$prezzo')");
echo "<p>Fine script.</p>";

// ci connettiamo al database ed eseguiamo la query

if (isset($mysql_query)) {
	$connection = connect($mysql_query);
} else
	$connection = connect();

?>