<?php

session_start();

include_once ('../include/functions.php');

adminlogin($_SESSION['admin']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Lista categorie</title>
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


					/*
					 * Codice per visualizzare una particolare categoria
					 * Troviamo il nome della categoria partendo dal solo id
					 * che era contenuto nella variabile GET dell'URL
					 */

					echo "<p><strong>Elenco delle vendite:</strong></p>";

					$connection = connect();
					$result = dbReaderQuery($query_cat);

					// Codice per visualizzare la lista delle categorie da cui scegliere
					$query = ("SELECT * FROM vendite");

					$connection = connect();
					$result = dbReaderQuery($query);

					foreach ($result as $key => $value) {
						if ($j == 0) {
							echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';
							echo '<tr>';
							echo '<td><div id="table-column">';
							echo '<strong>Utente</strong></td>';
							echo '<td><strong>Prodotto:</strong></td>';
							echo '<td><strong>Totale:</strong></td>';
							echo '</tr>';
						}
						$j++;
						echo "<tr>";
						echo '<td><div id="table-column"';
						echo "<p><strong>";
						echo '<a href="user-edit.php?id='.$value['idutente'].'">'.$value['idutente'].'</a>';
						echo "</strong></td>";
						echo '<td><a href="product-edit.php?id='.$value['idprodotto'].'">'.$value['idprodotto'].'</a></td>';
						echo '<td>'.$value['totale'].'</td>';
						echo "</tr>";

					} echo "</table>";
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