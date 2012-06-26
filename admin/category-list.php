<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Registrati</title>
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
			<!--<section id="middle">
			<div id="container">!-->
			<div id="content">

				<?php

				include_once ("../include/functions.php");

				/*
				 * Codice per visualizzare una particolare categoria
				 * Troviamo il nome della categoria partendo dal solo id
				 * che era contenuto nella variabile GET dell'URL
				 */
				 
				 echo "<p><strong>Elenco delle categorie:</strong></p>";

				$connection = connect();
				$result = dbReaderQuery($query_cat);

				// Codice per visualizzare la lista delle categorie da cui scegliere
				$query = ("SELECT * FROM categorie");

				$connection = connect();
				$result = dbReaderQuery($query);

				foreach ($result as $key => $value) {
					if ($j == 0) {
						echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';
						echo '<tr>';
						echo '<td><div id="table-column">';
						echo '<strong>Nome</strong></td>';
						echo '<td><strong>Descrizione:</strong></td>';
						echo '</tr>';
					}
					$j++;
					echo "<tr>";
					echo '<td><div id="table-column"';
					echo "<p><strong>";
					echo $value['nome'];
					echo "</strong></td>";
					echo "<td><small>" . $value['descrizione'] . "</small></td>";
					echo '<td><a href="category-edit.php?id=' . $value['id'] . '">Modifica</a>';
					echo '<td><a href="category-delete.php?id=' . $value['id'] . '">Cancella</a>';
					echo "</td>";
					echo "</tr>";

				} echo "</table>";
				?>
			</div>

			<aside id="leftcolumn">
				<?
				include ("admin-sidebar.php");
				?>
				</aside><!-- #sideLeft -->

				<!--</section>!-->
				<div id="footer">
					<?
					include ("footer.php");
					?>
				</div>
			</div>
	</body>
</html>