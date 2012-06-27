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
							Tutto il codice sviluppato è open source e i vari commit sono disponibili su <a href="https://github.com/gioggi2002/ProgettoLAM/">GitHub.</a>
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