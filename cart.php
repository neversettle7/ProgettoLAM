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

							$cart = $_SESSION['cart'];
							if (@isset($_GET['action'])) {
								$action = $_GET['action'];

								switch ($action) {
									case 'add' :
										if ($cart) {
											$cart .= ',' . $_GET['id'];
										} else {
											$cart = $_GET['id'];
										}
										break;

									case 'delete' :
										if ($cart) {
											$items = @explode(',', $cart);
											$acquisto = '';
											foreach ($items as $prodotto) {
												if ($_GET['id'] != $prodotto) {
													if ($acquisto != '') {
														$acquisto .= ',' . $prodotto;
													} else {
														$acquisto = $prodotto;
													}
												}
											}
											$cart = $acquisto;
										}
										break;

									case 'update' :
										if ($cart) {
											$acquisto = '';
											foreach ($_POST as $key => $value) {
												if (@stristr($key, 'quantita')) {
													$id = @str_replace('quantita', '', $key);
													$prodotti = ($acquisto != '') ? @explode(',', $acquisto) : @explode(',', $cart);
													$acquisto = '';

													foreach ($prodotti as $prodotto) {
														if ($id != $prodotto) {
															if ($acquisto != '') {
																$acquisto .= ',' . $prodotto;
															} else {
																$acquisto = $prodotto;
															}
														}
													}

													for ($i = 1; $i <= $value; $i++) {
														if ($acquisto != '') {
															$acquisto .= ',' . $id;
														} else {
															$acquisto = $id;
														}
													}
												}
											}
										}
										$cart = $acquisto;
										break;
								}
							}

							$_SESSION['cart'] = $cart;
						?>

							<html>
								<head>
									<title>Un cart della spesa con PHP</title>
								</head>
								<body>
									<h1>cart in PHP</h1>

									<?php
									echo writeShoppingCart();
									?>

									<h1>Controlla il numero dei prodotti</h1>

									<?php
									echo showCart();
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