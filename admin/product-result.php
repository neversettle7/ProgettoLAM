/* Script per l'inserimento dei prodotti nel database */

<!-- Verifichiamo che i dati inviati dalla pagina insert-product.php siano ricevuti correttamente -->

<p>Nome: <?php echo $_POST['nome']; ?></p>
<p>Descrizione: <?php echo $_POST['descrizione']; ?></p>
<p>Quantità: <?php echo $_POST['quantita']; ?></p>
<p>Prezzo: <?php echo $_POST['prezzo']; ?></p>
<p>Categoria: <?php echo $_POST['categoria']; ?></p>
<p>File: <?php echo $_FILES['photo']['name']; ?></p>

<?php

// Definiamo il percorso in cui verranno salvate le immagini uploadate
$target = "../images/products/";
$target = $target . basename($_FILES['photo']['name']);

include_once '../include/functions.php';

// Assegniamo i valori alle variabili php per preprarare l'inserimento nel db

$nome = $_POST['nome'];
$descrizione = $_POST['descrizione'];
$quantita = $_POST['quantita'];
$prezzo = $_POST['prezzo'];
$categoria = $_POST['categoria'];
$photo = ($_FILES['photo']['name']);

// Query di inserimento del prodotto e delle sue informazioni

$query = ("INSERT INTO prodotti (nome, descrizione, quantita, prezzo, categoria, image) VALUES ('$nome', '$descrizione', '$quantita', '$prezzo', '$categoria', '$photo')");
echo "<p>Fine script.</p>";

// Ci connettiamo al database ed eseguiamo la query

if (isset($query)) {
	$connection = connect($query);
} else
	$connection = connect();

// Trasferiamo il file che è stato uploadato sul server e verifichiamo
// che l'upload abbia avuto successo

if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
	// Risposta positiva se l'upload ha avuto successo
	echo "<p>Il file " . basename($_FILES['uploadedfile']['name']) . " è stato caricato correttamente.";
} else {
	// Risposta negativa se l'upload non ha avuto successo
	echo "<p>Il file non è stato caricato correttamente.";
}

?>