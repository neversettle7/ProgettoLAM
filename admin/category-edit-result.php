/* Script per la modifica delle categorie nel database */

<!-- Verifichiamo che i dati inviati dalla pagina insert-product.php siano ricevuti correttamente -->

<p>
	Nome: <?php echo $_POST['nome']; ?>
</p>
<p>
	Descrizione: <?php echo $_POST['descrizione']; ?>
</p>
<p>
	Id: <?php echo $_GET['id'] ?>
</p>

<?php

include_once '../include/functions.php';

$id = $_GET['id'];

if (isset($id)) {

	// Assegniamo i valori alle variabili php per preprarare l'inserimento nel db

	$nome = $_POST['nome'];
	$descrizione = $_POST['descrizione'];
	
	// Query di inserimento del prodotto e delle sue informazioni

	$query = ("UPDATE categorie SET nome='$nome', descrizione='$descrizione' WHERE id='$id'");
	echo $query;
	$connection = connect($query);

	// Ci connettiamo al database ed eseguiamo la query
} else {
	echo "Nessuna categoria da modificare. Errore.";
}
?>
