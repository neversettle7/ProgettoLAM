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

// Old - usare questa funzione se non si vuole rinominare il file:
// $target = $target . basename($_FILES['photo']['name']);

include_once '../include/functions.php';

// Assegniamo i valori alle variabili php per preprarare l'inserimento nel db

$nome = $_POST['nome'];
$descrizione = $_POST['descrizione'];
$quantita = $_POST['quantita'];
$prezzo = $_POST['prezzo'];
$categoria = $_POST['categoria'];
$photo = ($_FILES['photo']['name']);


// Ora dobbiamo cambiare nome al file
// Richiamiamo la funzione che separa il nome del file dalla sua estensione

$ext = findext($_FILES['photo']['name']);
echo "<p>Estensione del file = ".$ext;

// Assegniamo un nome casuale all'immagine caricata, in modo da evitare che
// immagini uploadate con lo stesso nome vengano sovrascritte

$a = (uniqid(img));
$b = $a.'.';
$nomefile = $b.$ext;
$target = $target.$b.$ext;

// Check - echo "<p>a = ".$a." e b = ".$b;
// Check - echo "<p>Il nuovo nome del file è: ".$r;

// Query di inserimento del prodotto e delle sue informazioni

$query = ("INSERT INTO prodotti (nome, descrizione, quantita, prezzo, categoria, image) VALUES ('$nome', '$descrizione', '$quantita', '$prezzo', '$categoria', '$photo')");
echo "<p>Fine script.</p>";

// Ci connettiamo al database ed eseguiamo la query

// Verifichiamo che il file caricato sia un file immagine (jpg o png), in caso
// positivo trasferiamo sul server il file che è stato uploadato e verifichiamo
// che l'upload abbia avuto successo

echo "<p>Tipo di file caricato: " . $_FILES['photo']['type'];
echo "<p>Dimensione file caricato: " . $_FILES['photo']['size'];

if (($_FILES['photo']['type'] == "image/png") || ($_FILES['photo']['type'] == "image/jpg") || ($_FILES['photo']['type'] == "image/jpeg")
	 || ($_FILES['photo']['type'] == "image/gif") && ($_FILES['photo']['size'] < 3500000)) {
	 	if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
		// Eseguiamo query e upload e rispondiamo positivamente se si sono conclusi bene
		if (isset($query)) {
			$connection = connect($query);
		} else
			$connection = connect();
		echo "<p>Il file - " . $b.$ext . " - e' stato caricato correttamente.";
	} else {
		// Risposta negativa se l'upload non ha avuto successo
		echo "<p>Il file non è stato caricato correttamente.";
	}
} else {
	echo "<p>Puoi caricare solo file con estensione .jpg o .png di dimensione inferiore ai 3500kB.";
}

?>
