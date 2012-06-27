<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Modifica utenti</title>
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
			<!--<section id="middle">-->
			<div id="container">
				<div id="content">
					<p>
						<strong>Riepilogo delle informazioni inserite:</strong>
					</p>

					<p>
						Nome: <?php echo $_POST['nome']; ?>
					</p>
					<p>
						Descrizione: <?php echo $_POST['descrizione']; ?>
					</p>
					<p>
						Id: <?php echo $_GET['id']; ?>
					</p>

					<?php

					include_once '../include/functions.php';

					$id = $_GET['id'];

					if (isset($id)) {

						// Assegniamo i valori alle variabili php per preprarare l'inserimento nel db

						$nome = $_POST['nome'];
						$descrizione = $_POST['descrizione'];

						// Query di inserimento del prodotto e delle sue informazioni

						$query = ("UPDATE categorie SET nome='$nome', descrizione='$descrizione' WHERE id='$id'");
						echo $query;
						$connection = connect($query);

						// Ci connettiamo al database ed eseguiamo la query
					} else {
						echo "Nessuna categoria da modificare. Errore.";
					}
				?>
</div>

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