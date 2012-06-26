<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Esito login</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
		<script type="text/javascript" src="view.js"></script>
	</head>
	<body id="main_body" >
		<div id="wrapper">
			<div id="header">
				<?
				include ("header.php");
				?>
			</div>
			<section id="middle">
				<div id="navigation">
					<?
					include ("navigation.php");
					?>
				</div>
				<div id="container">
					<div id="content">

						<?php
						$username = $_POST['username'];
						$password = md5($_POST['password']);

						include ("include/functions.php");

						$connection = connect();

						// Verifichiamo i dati inseriti

						$query = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";

						$result = dbReaderQuery($query);
						$_SESSION['login'] = 0;

						foreach ($result as $key => $value) {
							// Check - echo '<p>Username ricevuto dalla query: ' . $value['username'];
							// Check - echo '<p>Password ricevuta dalla query: ' . $value['password'];
							// Check - echo '<p>L\'utente e\' un admin: ' . $value['admin'];

							session_start();
							$_SESSION['login'] = 1;
							$_SESSION['username'] = $username;
							if (($value['admin']) == 1) {
								$_SESSION['admin'] = 1;
							} else
								$_SESSION['admin'] = 0;
						}

						if ($_SESSION['login'] != 1) {
							echo '<strong>Attenzione!</strong>';
							echo '<p></p><p><strong>Login fallito</strong>: controlla le tue credenziali e riprova.</p>';
						} else {
							echo '<strong>Benvenuto/a '.$value['nome'].'</strong>';
							echo '<p></p><p>Fai click <a href="index.php">qui</a> per tornare alla home.';
						}

						// Check - echo "<p>Login: ";
						// Check - echo $_SESSION['login'];
						// Check - echo "<p>Admin: ";
						// Check - echo $_SESSION['admin'];
						?>
					</div>
				</div>

				<aside id="sideLeft">
					<?
					include ("sidebar.php");
					?>
				</aside><!-- #sideLeft -->

			</section>
			<div id="footer">
				<?
				include ("footer.php");
				?>
			</div>
		</div>
	</body>
</html>