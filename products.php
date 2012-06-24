<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="iso-8859-1" />
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

								foreach ($result as $key => $value) {

									echo '<p><h1>' . $value['nome'] . '</h1>';
									echo '<p><img id="product-images" src="images/products/' . $value['image'] . '" />';
									echo '<p><p><p><strong>Prezzo: </strong>'.$value['prezzo'].' euro';
									echo '<p><p><strong>Descrizione del prodotto:</strong> ';
									echo '<p>'.$value['descrizione'];
									if ($value['quantita'] > 0) {
										echo "<p><strong>Prodotto disponibile.<br></strong>";
										echo '<a href="purchase.php">Acquistalo subito!</a></p>';
									} else
										echo "<p>Prodotto non disponibile.</p>";
								}

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