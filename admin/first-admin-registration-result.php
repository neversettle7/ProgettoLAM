<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Registrazione amministratore</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	</head>
	<body id="main_body" >
		<div id="wrapper">
			<div id="header">
				<?
				include ("header.php");
				?>
			</div>
			<!--<section id="middle">-->
			<div id="container">
				<div id="content">
					<p>
						<strong>Riepilogo delle informazioni inserite:</strong>
					</p>

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

					<?php

					include_once '../include/functions.php';

					$nome = $_POST['nome'];
					$cognome = $_POST['cognome'];
					$indirizzo = $_POST['indirizzo'];
					$username = $_POST['username'];
					$password = md5($_POST['password']);
					$email = $_POST['email'];

					// Query per inserire i dati nella tabella

					$query = ("INSERT INTO utenti (nome, cognome, indirizzo, username, password, email, admin) VALUES ('$nome', '$cognome', '$indirizzo', '$username', '$password', '$email', 1)");
					// Check - echo "<p>Informazioni inserite correttamente</p>";
					// Check - echo $query;
					$connection = connect($query);
					?>
				</div>
				<!--</div>!-->

				<aside id="leftcolumn">
					<?
					include ("admin-sidebar.php");
					?>
				</aside><!-- #sideLeft -->
				<div style="clear: both">
					&nbsp;
				</div>
			</div>
			<!--</section>!-->
			<div id="footer">
				<?
				include ("footer.php");
				?>
			</div>
		</div>
	</body>
</html>