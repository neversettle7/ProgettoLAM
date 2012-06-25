<?php include ("include/functions.php") ?>

/* Script per la verifica dei dati di login */

<!-- Verifichiamo che i dati inviati dalla pagina login.php siano ricevuti correttamente !-->

<p>Username: <?php echo $_POST['username']; ?></p>
<p>Password: <?php echo $_POST['password']; ?></p>
<p>Password hashata: <?php echo md5($_POST['password']); ?></p>

<!-- Assegniamo i valori alle variabili php per preprarare l'inserimento nel db !-->

<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

// Ci connettiamo al database - sarebbe utile integrarlo in una funzione esterna

$connection = connect();

// Verifichiamo i dati inseriti

$query = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";

$result = dbReaderQuery($query) or exit('$sql_login failed: ' . mysql_error());

foreach ($result as $key => $value) {
	echo '<p>Username ricevuto dalla query: ' . $value['username'];
	echo '<p>Password ricevuta dalla query: ' . $value['password'];
	echo '<p>L\'utente e\' un admin: ' . $value['admin'];

	session_start();
	echo "<p>Login avvenuto con successo.</p>";
	session_start();
	$_SESSION['login'] = 1;
	$_SESSION['username'] = $username;
	if (($value['admin']) == 1) {
		$_SESSION['admin'] = 1;
	} else
		$_SESSION['admin'] = 0;
}

echo "<p>Login: ";
echo $_SESSION['login'];
echo "<p>Admin: ";
echo $_SESSION['admin'];
?>
<p></p>
<p><a href="index.php">Home</a></p>