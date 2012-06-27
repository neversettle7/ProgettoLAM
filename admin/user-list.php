<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Modifica utenti</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
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

					<?php

					include_once ("../include/functions.php");

					echo '<p><a href="admin-registration.php">Vuoi aggiungere un amministratore?</a></p>';

					echo "<p><strong>Elenco degli utenti:</strong></p>";

					$connection = connect();
					$result = dbReaderQuery($query_cat);

					// Codice per visualizzare la lista delle categorie da cui scegliere
					$query = ("SELECT * FROM utenti");

					$connection = connect();
					$result = dbReaderQuery($query);

					foreach ($result as $key => $value) {
						if ($j == 0) {
							echo '<table border="1" id="cart-table" bordercolor="#999999" style=" background-color: transparent" cellpadding="2" cellspacing="2" width="700">';
							echo '<tr>';
							echo '<td><div id="table-column">';
							echo '<strong>Nome</strong></td>';
							echo '<td><strong>Username:</strong></td>';
							echo '<td><strong>E\' admin?</strong></td>';
							echo '</tr>';
						}
						$j++;
						echo "<tr>";
						echo '<td><div id="table-column"';
						echo "<p>";
						echo $value['nome'] . ' ';
						echo $value['cognome'];
						echo "</td>";
						echo "<td>" . $value['username'] . "</td>";
						echo '<td>';
						if ($value['admin'] == 1)
							echo "<strong>Si</strong>";
						else
							echo "No";
						echo '</td>';
						echo '<td><a href="user-edit.php?id=' . $value['id'] . '">Modifica</a>';
						echo '<td><a href="user-delete.php?id=' . $value['id'] . '">Cancella</a>';
						echo "</td>";
						echo "</tr>";

					} echo "</table>";
					?>
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