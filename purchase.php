<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Acquisto</title>
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
							<?php

							include_once ("include/functions.php");

							// Verifichiamo che i dati arrivati siano giusti

							$username = $_SESSION['username'];
							// Check - echo '<p>'.$username;

							$connection = connect();

							// Andiamo a recuperare l'id utente nel db
							$query_user = ('SELECT id FROM utenti WHERE username="' . $username . '"');

							$result = dbReaderQuery($query_user);
							// Check - print_r($result);
							foreach ($result as $key => $value) {
								$idutente = $value['id'];
								// Check - print_r($idutente);
							}

							// print_r($idutente);
							//echo "L'utente loggato è: " . $username . " con l'id: " . $idutente;

							// Leggiamo gli elementi presenti nel carrello e operiamo sul db

							$cart = $_SESSION['cart'];
							if ($cart) {
								$items = explode(',', $cart);
								$contents = array();
								foreach ($items as $item) {
									$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
								}
								// Check - print_r($contents);

								$connection = connect();

								$i = 0;
								echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';

								// Andiamo ad operare sul db. Passiamo la lista $content al foreach
								// in modo da iterare e andare a cercare sul db solo i prodotti effettivamente
								// presenti nella nostra lista d'acquisto
								foreach ($contents as $id => $qty) {
									// Check - print_r($contents);
									$query = 'SELECT * FROM prodotti WHERE id = ' . $id;
									$result = dbReaderQuery($query);
									echo '<td>' . $result[$i]['nome'] . '</td>';
									echo '<td>&euro;' . $result[$i]['prezzo'] . '</td>';
									echo '<td>Qty:' . $qty . '</td>';
									echo '<td>&euro;' . ($result[$i]['prezzo'] * $qty) . '</td>';
									$total += $result[$i]['prezzo'] * $qty;
									echo '</tr>';

									// Aggiorniamo le quantità disponibili del prodotto
									$new_qty = $result[$i]['quantita'] - $qty;

									// Se il prodotto è disponibile nella quantità desiderata operiamo sul db
									// e memorizziamo la quantità del prodotto rimasta in magazzino
									if ($new_qty >= 0) {
										// Questa query serve per aggiornare la quantità disponibili del prodotto
										$query_update = ('UPDATE prodotti SET quantita="' . $new_qty . '" WHERE id="' . $id . '"');
										db_edit($query_update, $connection);
										// Questa query serve per inserire la vendita nella relativa tabella del db
										$query_add = ("INSERT INTO vendite (idutente, idprodotto, totale) VALUES ('$idutente', '$id', '$total')");
										// Check - print_r($query_add);
										db_edit($query_add, $connection);
									}
									// Se il prodotto non è disponibile lo comunichiamo all'utente e NON operiamo sul db
									else {
										echo "<p>Spiacenti, il prodotto " . $result[$i]['nome'] . " non è disponibile nella quantità desiderata.";
										echo "Sono disponibili solo " . $result[$i]['quantita'] . " del prodotto desiderato.";
									}
								}
								echo '</table>';
								echo '<p>Totale: &euro;' . $total . '</p>';
							}

							// Effettuiamo la query nel database
							/*$query_add = ("INSERT INTO vendite (idutente, idprodotto, totale) VALUES ('$idutente', '$idprodotto', '$total')");
							 print_r($query_add);
							 connect($query_add);*/

							echo '<p>Sei arrivato a questa pagina per sbaglio? Torna alla <a href="index.php">home</a>.';
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