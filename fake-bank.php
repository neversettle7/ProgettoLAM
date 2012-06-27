<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Banca</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/bank.css" type="text/css" media="screen, projection" />
	</head>

	<body>

		<div id="container">
			<div id="header">
				<h1> Banca </h1>
			</div>
			<div id="navigation">
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Chi siamo</a>
					</li>
					<li>
						<a href="#">Servizi</a>
					</li>
					<li>
						<a href="#">Contatti</a>
					</li>
				</ul>
			</div>
			<div id="content">
				<?php

				$total = $_GET['total'];
				?>

				<h2> Dacci i tuoi soldi </h2>
				<p>
					Inserisci il numero della tua carta di credito e il codice di sicurezza, grazie.
				</p>
				<label class="description" for="nome">Numero carta</label>
				<span>
					<div>
						<input name="nome" class="element text" maxlength="12" size="12"/>
					</div> <label> </label> </span>
				<input name="nome" class="element text" maxlength="3" size="3"/>
				<p></p>
				<p>
					<h2>Come funziona</h2>
				</p>
				<p>
					Controlleremo che la tua carta abbia abbastanza fondi e acconsentiremo all'eventuale acquisto.
				</p>
				<p>
					Ci risulta che tu debba pagare &euro; <? echo $total ?>. E' corretto?
				</p>
				<?
				echo '<form id="purchase" method="post" action="purchase.php"';
				echo '<p><p><input type="submit" value="Sì, procedi"></form>';
				echo '<form id="purchase" method="post" action="cart.php">';
				echo '<p><p><input type="submit" value="No, torna indietro"></form>';
				?>
				<p></p>
				<p>
					<small>A questo punto ci dovrebbe essere il reale controllo da parte della banca.
						Per ovvi motivi questo è sintetizzato nella scelta tra i pulsanti di cui sopra.
						Premendo "sì" si procede al pagamento. Premendo "no" si torna indietro al carrello.</small>
				</p>
			</div>
			<div id="footer">
				Copyright © Site name, 2012
			</div>
		</div>

	</body>
</html>