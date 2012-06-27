<?php

session_start();

include_once ('../include/functions.php');

adminlogin($_SESSION['admin']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Lista prodotti</title>
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

					<?php

					include_once ("../include/functions.php");

					echo '<p><a href="product-insert.php">';
					echo '<strong>Crea un nuovo prodotto</strong>';
					echo '</a><p></p></p>';

					$cat = $_GET['cat'];

					if (isset($cat)) {

						/*
						 * Codice per visualizzare una particolare categoria
						 * Troviamo il nome della categoria partendo dal solo id
						 * che era contenuto nella variabile GET dell'URL
						 */

						$query_cat = ("SELECT * FROM categorie WHERE id = " . $cat);

						// Check - print_r($query_cat);

						$connection = connect();
						$result = dbReaderQuery($query_cat);

						foreach ($result as $key => $value) {
							$nome_cat = $value['nome'];
							// Check - print_r($nome_cat);
							echo "<strong>Elenco dei prodotti disponibili nella categoria: " . $nome_cat . "</strong>";
							echo '<p>Clicka sul nome del prodotto per effettuare modifiche</p><p></p>';

						}

						/*
						 * Questo codice permette invece di recuperare la lista dei
						 * prodotti presenti nella categoria selezionata precedentemente
						 * e disporli in una tabella ordinata
						 */

						$query = ('SELECT * FROM prodotti WHERE categoria = "' . $nome_cat . '"');

						// Check - print_r($query);

						$connection = connect();
						$result = dbReaderQuery($query);

						foreach ($result as $key => $value) {
							if ($i == 0) {
								echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';
								echo '<tr>';
								echo '<td><div id="table-column">';
								echo '<strong>Nome</strong></td>';
								echo '<td><strong>Quantità disponibile:</strong></td>';
								echo '<td><strong>Prezzo:</strong></td>';
								echo '</tr>';
							}
							$i++;
							echo "<tr>";
							echo '<td><div id="table-column"';
							echo '<p><a href=product-edit.php?id=' . $value['id'] . '>';
							echo "<p><strong>" . $value['nome'] . '</a></strong>';
							echo "</td>";
							echo "<td>" . $value['quantita'] . "</td>";
							echo "<td>" . $value['prezzo'] . "</td>";
							echo '<td><a href=product-delete.php?id=' . $value['id'] . '>Elimina</a>';
							echo "</tr>";
						} echo "</table>";
						echo '<p><p><a href="product-list.php">Torna alla pagina di scelta della categoria.</a></p>';
					} else {
						echo "<strong>Scegli la categoria del prodotto che vuoi modificare:</strong><p></p>";

						// Codice per visualizzare la lista delle categorie da cui scegliere
						$query = ("SELECT * FROM categorie");

						$connection = connect();
						$result = dbReaderQuery($query);

						foreach ($result as $key => $value) {
							if ($j == 0) {
								echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';
							}
							$j++;
							echo "<tr>";
							echo '<td><div id="table-column"';
							echo '<p><strong><a href="product-list.php?cat=' . $value['id'] . '">';
							echo $value['nome'];
							echo "</a></strong></td>";
							echo "<td><br><small>" . $value['descrizione'] . "</small></td>";
							echo "</td>";
							echo "</tr>";
						} echo "</table>";

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