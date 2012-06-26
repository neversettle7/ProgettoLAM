/* Script per la modifica dei prodotti nel database */

<!-- Verifichiamo che i dati inviati dalla pagina insert-product.php siano ricevuti correttamente -->

<p>
	Nome: <?php echo $_POST['nome']; ?>
</p>
<p>
	Descrizione: <?php echo $_POST['descrizione']; ?>
</p>
<p>
	Quantità: <?php echo $_POST['quantita']; ?>
</p>
<p>
	Prezzo: <?php echo $_POST['prezzo']; ?>
</p>
<p>
	Categoria: <?php echo $_POST['categoria']; ?>
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
	$quantita = $_POST['quantita'];
	$prezzo = $_POST['prezzo'];
	$categoria = $_POST['categoria'];

	// Query di inserimento del prodotto e delle sue informazioni

	$query = ("UPDATE prodotti SET nome='$nome', descrizione='$descrizione', quantita='$quantita', prezzo='$prezzo', categoria='$categoria' WHERE id='$id'");
	echo $query;
	$connection = connect($query);

} else {
	echo "Nessun prodotto da modificare. Errore.";
}
?>
