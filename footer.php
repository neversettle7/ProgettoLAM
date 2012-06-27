<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	</head>

	<body>
		<center>2012 - Copyright <a href="http://www.giovannidini.com">Giovanni Dini</a> - Progetto di Linguaggi e Applicazioni Multimediali
		<?php
		// Controlliamo se l'utente è admin - Se lo è diamogli la possibilità di connettersi al
		// pannello di controllo
		if($_SESSION['admin'] == 1){
			echo ' | <strong><a href="admin/admin.php"> Pannello di controllo amministratore</a>';
		}
		?>
		</center>
	</body>
</html>