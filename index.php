<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>ecom - eCommerce CMS template</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection" />
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

						<h1>ecom</h1>
						<br>

						<p>
							ecom è un CMS per l'eCommerce.
						</p>
						<p>
							Progettato e sviluppato interamente da Giovanni Dini (mat. 232274) per l'esame di <a href="http://www.mauriziomaffi.it/">Linguaggi e Applicazioni Multimediali.</a>
						</p>
						<p></p>
						<p>
							Tutti i vari commit del codice sviluppato sono disponibili su <a href="https://github.com/gioggi2002/ProgettoLAM/">GitHub.</a>
						</p>
						<p>
							<center>
								<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Licenza Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a>
							</center>
							<br />
							Quest'opera è distribuita con <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">licenza Creative Commons 3.0</a> a queste condizioni:
							<br>
							- Attribuzione del lavoro al suo autore
							<br>
							- Non utilizzabile per fini commerciali
							<br>
							- Condivisione permessa solo con lo stesso tipo di licenza.
							<br>
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