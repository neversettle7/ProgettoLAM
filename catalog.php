<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="iso-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Catalogo</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	</head>

	<body>

		<div id="wrapper">

			<header id="header">
				<?
				include ("header.php");
				?>
			</header><!-- #header-->

			<section id="middle">
				<div id="navigation">
					<?
					include ("navigation.php");
					?>
				</div>

				<div id="container">
					<div id="content">
						<p>
							<!-- ELENCO CATEGORIE - RISULTATO QUERY -->
							<?php

							include_once ("include/functions.php");

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
										echo '<table border="0" bordercolor="#000000" style="background-color: transparent" width="700" cellpadding="0" cellspacing="0">';
									}
									$i++;
									if (($i % 2) == 1 || $i == 0) {
										echo "<tr>";
									}
									echo '<td><div id="table-column"';
									echo '<p><a href=products.php?id=' . $value['id'] . '><img id="catalog-images" src="images/products/' . $value['image'] . '" />';
									echo "<p><strong>" .$value['nome'] . '</a></strong>';
									echo "</td>";
									if (($i % 2) == 0) {
										echo "</tr>";
									}
								} echo "</table>";
								echo '<p><p><a href="catalog.php">Torna alla pagina delle categorie.</a></p>';
							} else {
								echo "<strong>Elenco delle categorie:</strong>";

								// Codice per visualizzare la lista delle categorie da cui scegliere
								$query = ("SELECT * FROM categorie");

								$connection = connect();
								$result = dbReaderQuery($query);

								foreach ($result as $key => $value) {
									if ($j == 0) {
										echo '<table border="0" bordercolor="#000000" style="background-color: transparent" width="700" cellpadding="0" cellspacing="0">';
									}
									$j++;
									if (($i % 2) == 1 || $j == 0) {
										echo "<tr>";
									}
									echo '<td><div id="table-column"';
									echo '<p><a href=catalog.php?cat=' . $value['id'] . '><img id="catalog-images" src="images/categories/' . $value['image'] . '" />';
									echo "<p><strong>";
									echo $value['nome'];
									echo "</a></strong>";
									echo "<br><small>" . $value['descrizione']."</small>";
									echo "</td>";
									if (($j % 2) == 0) {
										echo "</tr>";
									}
								} echo "</table>";
							}
							?>
						</p>
					</div><!-- #content-->
				</div><!-- #container-->

				<aside id="sideLeft">
					<?
					include ("sidebar.php");
					?>
				</aside><!-- #sideLeft -->

			</section><!-- #middle-->

			<footer id="footer">
				<?
				include ("footer.php");
				?>
			</footer><!-- #footer -->

		</div><!-- #wrapper -->

	</body>
</html>