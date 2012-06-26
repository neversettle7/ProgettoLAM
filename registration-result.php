<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Registrazione</title>
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

						include_once 'include/functions.php';

						$nome = $_POST['nome'];
						$cognome = $_POST['cognome'];
						$indirizzo = $_POST['indirizzo'];
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$email = $_POST['email'];

						// query per inserire i dati nella tabella

						$mysql_query = ("INSERT INTO utenti (nome, cognome, indirizzo, username, password, email) VALUES ('$nome', '$cognome', '$indirizzo', '$username', '$password', '$email')");

						// Ci connettiamo al database ed eseguiamo la query

						if (isset($mysql_query)) {
							$connection = connect($mysql_query);
						} else
							echo "Errore nella registrazione/acquisizione dati.";

						echo '<p><strong>Grazie per esserti registrato ' . $nome . ' ' . $cognome . '!</strong></p>';
						echo '<p>Ecco i dati che hai inserito: </p>';
						echo '<p><strong>Indirizzo: </strong>' . $indirizzo . '</p>';
						echo '<p><strong>Username: </strong>' . $username . '</p>';
						echo '<p><strong>Indirizzo email: </strong>' . $email . '</p>';
						
						echo '<p></p><p>Fai subito <a href="login.php">login</a> utilizzando username e passowrd scelti per cominciare subito gli acquisti!</p>';
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