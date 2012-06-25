<?php session_start(); ?>

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
							<!-- Porzione di codice relativa alla visualizzazione del cart -->
							<?

							include_once ("include/functions.php");

							// Otteniamo l'id del prodotto dall'URL
							$id = $_GET['id'];
							// Check - echo "<p>ID: " . $id;

							// Otteniamo l'azione dall'URL
							$action = $_GET['action'];
							// Check - echo "<p>Action: " . $action;

							// Assegniamo alla variabile cart il contenuto del carrello nella sessione
							$cart = $_SESSION['cart'];

							// Se l'id del prodotto non eiste, restituiamo un errore
							/*if ($id && !productExists($id)) {
							 die("Error. Product Doesn't Exist");
							 }*/

							switch($action) {
								case 'add' :
									// Istruzioni per l'aggiunta di prodotti al carrello
									echo "<p>Aggiungo il prodotto " . $id . " al carrello.";
									if (($cart)) {
										$newcart = $cart . ',' . $id;
										$cart = $newcart;
									} else {
										$cart = $id;
									}
									echo "<p>Ecco il carrello attuale: " . $cart;
									break;

								case 'remove' :
									// Istruzioni per la rimozione di un prodotto dal carrello
									echo "<p>Rimuovo il prodotto " . $id . " dal carrello.";
									if ($cart) {
										// Esplodiamo il carrello per separare gli elementi
										$items = explode(',', $cart);
										$newcart = '';
										foreach ($items as $item) {
											// Cancelliamo l'elemento se il suo id è uguale
											// a quello cercato
											if ($id != $item) {
												if ($newcart != '') {
													$newcart .= ',' . $item;
												} else {
													$newcart = $item;
												}
											}
										}
										$cart = $newcart;
									}
									break;

								case 'update' :
									// Istruzioni per l'update
									echo "update";
									break;

								case 'display' :
									// Istruzioni per la semplice visualizzazione del contenuto - Check?
									echo "Contenuto attuale del carrello: " . $_SESSION['cart'];
									break;

								default :
									echo "<p>Nessuna azione.</p>";
									break;
							}

							if ($cart) {
								// Mostriamo il contenuto del carrello in una tabella
								$total = 0;
								$output[] = '<table>';
								foreach ($contents as $id => $qty) {
									$sql = 'SELECT * FROM prodotti WHERE id = ' . $id;
									$result = $db -> query($sql);
									$row = $result -> fetch();
									extract($row);
									$output[] = '<tr>';
									$output[] = '<td><a href="cart.php?action=delete&id=' . $id . '" class="r">Remove</a></td>';
									$output[] = '<td>' . $title . ' by ' . $author . '</td>';
									$output[] = '<td>&pound;' . $price . '</td>';
									$output[] = '<td><input type="text" name="qty' . $id . '" value="' . $qty . '" size="3" maxlength="3" /></td>';
									$output[] = '<td>&pound;' . ($price * $qty) . '</td>';
									$total += $price * $qty;
									$output[] = '</tr>';
								}
								$output[] = '</table>';
								$output[] = '<p>Grand total: &pound;' . $total . '</p>';

							} else {
								echo "<p>Il tuo carrello è vuoto.</p>";
							}

							echo "<p>Fine ciclo.";
							$_SESSION['cart'] = $cart;
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