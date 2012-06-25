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
							<!-- Pagina relativa al prodotto selezionato -->
							<?php

							include_once ("include/functions.php");

							$id = $_GET['id'];

							if (isset($id)) {

								$query = ('SELECT * FROM prodotti WHERE id = "' . $id . '"');

								$connection = connect();
								$result = dbReaderQuery($query);
								
								

								/*foreach ($result as $key => $value) {
									if (empty($_SESSION['cart'])) {
										$_SESSION['cart'] = $value['id'];
										print_r($_SESSION['cart']);
									} else {
										$_SESSION['cart'] = $_SESSION['cart'] . ',' . $value['id'];
										print_r($_SESSION['cart']);
									}
								} echo '<p>Elemento aggiunto al carrello.</p>';*/
							} else
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