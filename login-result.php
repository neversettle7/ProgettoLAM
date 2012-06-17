<?php include ("include/functions.php") ?>

/* Script per la verifica dei dati di login */

<!-- verifichiamo che i dati inviati dalla pagina login.php siano ricevuti correttamente !-->

<p>Username: <?php echo $_POST['username']; ?></p>
<p>Password: <?php echo $_POST['password']; ?></p>
<p>Password hashata: <?php echo md5($_POST['password']); ?></p>

<!-- assegniamo i valori alle variabili php per preprarare l'inserimento nel db !-->

<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

// ci connettiamo al database - sarebbe utile integrarlo in una funzione esterna

db_connect();

// verifichiamo i dati inseriti (e inseriamo il risultato della query in una variabile
// temporanea)

$sql_login = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";
$sql_admin = "SELECT * FROM utenti WHERE admin='1'";
$result_login = mysql_query($sql_login, $db_connect) or exit('$sql_login failed: ' . mysql_error());
$result_admin = mysql_query($sql_admin, $db_connect) or exit('$sql_admin failed: ' . mysql_error());
$count_login = mysql_num_rows($result_login);
$count_admin = mysql_num_rows($result_admin);

if ($count_login == 1) {

	// creiamo e salviamo la sessione, in modo che il login rimanga attivo

	session_start();
	echo "<p>Everything went better than expected.</p>";
	session_start();
	$_SESSION['login'] = 1;
	$_SESSION['username'] = $username;

	// l'utente loggato è un admin?

	if ($count_admin == 1) {
		$_SESSION['admin'] = 1;
	} else
		$_SESSION['admin'] = 0;

} else {
	echo "<p>Hai sbagliato i dati, cazzone.</p>";
}
	echo "<p>Login: ";
	echo $_SESSION['login'];
	echo "<p>Admin: ";
	echo $_SESSION['admin'];

?>
<p></p>
<p><a href="index.php">Home</a></p>