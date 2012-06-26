/* Verifica dei dati inseriti e inserimento dei dati nel database */

<!-- stampiamo i risultati inviati dalla pagina register.php per assicurarci che
siano stati recepiti correttamente !-->
<p>
	Nome: <?php echo $_POST["nome"]; ?>
</p>
<p>
	Cognome: <?php echo $_POST["cognome"]; ?>
</p>
<p>
	Indirizzo <?php echo $_POST["indirizzo"]; ?>:
</p>
<p>
	Indirizzo email: <?php echo $_POST["email"]; ?>
</p>
<p>
	Username: <?php echo $_POST["username"]; ?>
</p>
<p>
	Password: <?php echo $_POST["password"]; ?>
</p>

<!-- assegniamo i valori alle variabili php per preprarare l'inserimento nel db !-->

<?php

include_once '../include/functions.php';

$id = $_GET['id'];

if (isset($id)) {

	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$indirizzo = $_POST['indirizzo'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];

	// query per inserire i dati nella tabella

	$query = ("UPDATE utenti SET nome='$nome', cognome='$cognome', indirizzo='$indirizzo', username='$username', password='$password', email='$email' WHERE id='$id'");
	echo $query;
	$connection = connect($query);
} else {
	echo "Nessun utente da modificare. Errore.";
}
?>