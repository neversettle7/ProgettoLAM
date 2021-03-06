<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Il mio carrello</title>
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
							<h1>Il tuo carrello contiene:</h1>
						</p>
						<p>
							<!-- Porzione di codice relativa alla visualizzazione del cart -->
							<?

							include_once ("include/functions.php");

							if (!$_SESSION['cart']) {
								echo "<p>Il tuo carrello � vuoto. </p>";
								echo 'Ricordati di effettuare il <a href="login.php">login</a>!';
							}

							// Otteniamo l'id del prodotto dall'URL
							$id = $_GET['id'];
							// Check - echo "<p>ID: " . $id;

							// Otteniamo l'azione dall'URL
							$action = $_GET['action'];
							// Check - echo "<p>Action: " . $action;

							// Otteniamo la quantità di oggetti ordinati in caso di update
							//$qty = $_GET['qty'];

							// Assegniamo alla variabile cart il contenuto del carrello nella sessione
							$cart = $_SESSION['cart'];

							switch($action) {
								case 'add' :
									// Istruzioni per l'aggiunta di prodotti al carrello
									// Check - echo "<p>Aggiungo il prodotto " . $id . " al carrello.";
									if (($cart)) {
										$newcart = $cart . ',' . $id;
										$cart = $newcart;
									} else {
										$cart = $id;
									}
									//Check - echo "<p>Ecco il carrello attuale: " . $cart;
									break;

								case 'remove' :
									// Istruzioni per la rimozione di un prodotto dal carrello
									// Check - echo "<p>Rimuovo il prodotto " . $id . " dal carrello.";
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
									// Istruzioni per l'aggiornamento delle quantit� nel carrello
									if ($cart) {
										$newcart = '';
										foreach ($_POST as $key => $value) {
											if (stristr($key, 'qty')) {
												$id = str_replace('qty', '', $key);
												$items = ($newcart != '') ? explode(',', $newcart) : explode(',', $cart);
												$newcart = '';
												foreach ($items as $item) {
													if ($id != $item) {
														if ($newcart != '') {
															$newcart .= ',' . $item;
														} else {
															$newcart = $item;
														}
													}
												}
												for ($i = 1; $i <= $value; $i++) {
													if ($newcart != '') {
														$newcart .= ',' . $id;
													} else {
														$newcart = $id;
													}
												}
											}
										}
									}
									$cart = $newcart;
									break;

								case 'display' :
									// Istruzioni per la semplice visualizzazione del contenuto - Check?
									echo "Contenuto attuale del carrello: " . $_SESSION['cart'];
									break;

								default :
									// Check - echo "<p>Nessuna azione.</p>";
									// Check - echo "<p>Contenuto del carrello: ".$_SESSION['cart'];
									break;
							}

							$_SESSION['cart'] = $cart;
							// Check - echo "<p>Contenuto del carrello: ".$cart;

							if ($cart) {
								// Esplodiamo l'array per avere un array $contents con elementi singoli
								// magari presenti in quantit� maggiori di 1 ed evitare duplicati
								$cart = $_SESSION['cart'];
								if ($cart) {
									$items = explode(',', $cart);
									$contents = array();
									foreach ($items as $item) {
										$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
									}
									// Check - print_r($contents);

									$connection = @connect();
									$i = 0;

									echo '<form id="update-cart" method="post" action="cart.php?action=update">';
									echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';

									// Andiamo ad operare sul db. Passiamo la lista $content al foreach
									// in modo da iterare e andare a cercare sul db solo i prodotti effettivamente
									// presenti nella nostra lista d'acquisto
									foreach ($contents as $id => $qty) {
										// Check - print_r($contents);
										$query = 'SELECT * FROM prodotti WHERE id = ' . $id;
										$result = dbReaderQuery($query);
										// Check - print_r($result);
										// Check - print_r($result[$i]['prezzo']);
										// Check - echo "<p>ID: ".$id;
										// Check - echo "<p>Quantita': ".$qty;
										// Check - echo "<p>Prezzo: ".$result[$i]['prezzo'];
										// Check - echo $query;
										echo '<p><tr>';
										echo '<td><a href="cart.php?action=remove&id=' . $id . '" class="r">Elimina</a></td>';
										echo '<td>' . $result[$i]['nome'] . '</td>';
										echo '<td>&euro;' . $result[$i]['prezzo'] . '</td>';
										if ($qty > $result[$i]['quantita']) {
											//echo "ciao.";
											$error = 1;
											$qty = $result[$i]['quantita'];
										}
										echo '<td><input type="text" name="qty' . $id . '" value="' . $qty . '" size="3" maxlength="3" /></td>';
										echo '<td>&euro;' . ($result[$i]['prezzo'] * $qty) . '</td>';
										$total += $result[$i]['prezzo'] * $qty;
										echo '</tr>';
									}
									echo '</table>';
									echo '<input type="submit" value="Aggiorna" class="right"></form>';
									echo '<p><p><strong>Totale:</strong> &euro;' . $total . '</p></p>';
									if ($error == 1) {
										echo "<p><strong>Attenzione: </strong>La quantit� di uno dei prodotti richiesti non era disponibile. Abbiamo sistemato automaticamente la quantit�";
										echo " ordinata al massimo che possiamo fornire.</p>";
									}
									echo '<form id="purchase" method="post" action="fake-bank.php?total=' . $total . '">';
									echo '<p><p><input type="submit" value="Procedi all\'acquisto"></form>';

								}
							}
							echo '<p></p><p>Torna alla <a href="index.php">pagina iniziale</a>';
							echo ' o al <a href="catalog.php">catalogo</a>.</p>';
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