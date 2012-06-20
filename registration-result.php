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

include_once 'include/functions.php';

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$indirizzo = $_POST['indirizzo'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];

// query per inserire i dati nella tabella

$mysql_query = ("INSERT INTO utenti (nome, cognome, indirizzo, username, password, email) VALUES ('$nome', '$cognome', '$indirizzo', '$username', '$password', '$email')");

// ci connettiamo al database ed eseguiamo la query

if (isset($mysql_query)) {
	$connection = connect($mysql_query);
} else
	echo "Errore acquisizione dati.";

echo "<p></p><p></p>";
echo "<p>Fine script</p>";
?>