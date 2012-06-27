<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Registrati</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
		<script type="text/javascript" src="view.js"></script>
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
					Questo è il pannello di controllo. Da qui potrete raggiungere le seguenti pagine:
					<ul>
						<li>
							<a href="product-list.php" title="Chi siamo">Gestione prodotti</a>
						</li>
						<li>
							<a href="category-list.php" title="Servizi">Gestione categorie</a>
						</li>
						<li>
							<a href="user-list.php" title="Catalogo">Gestione utenti</a>
						</li>
						<li>
							<a href="../index.php" title="Home">Home page</a>
					</ul>

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