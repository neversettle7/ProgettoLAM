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
			<!--<section id="middle">
			<div id="container">!-->
			<div id="content">
				<?php
				include_once ("../include/functions.php");

				$id = $_GET['id'];

				if (isset($id)) {

					$query = ('SELECT * FROM categorie WHERE id = "' . $id . '"');

					$connection = connect();
					$result = dbReaderQuery($query);

					foreach ($result as $key => $value) {
						$descrizione = $value['descrizione'];
						$nome = $value['nome'];
					}
				} else {
					echo "Nessuna categoria selezionata. ";
				}
				?>

				<form enctype="multipart/form-data" id="register" method="post" action="category-edit-result.php?id=<? echo $id; ?>">
					<h2>Inserimento categorie</h2>
					<p>
						Compila tutti i campi della pagina per inserire una categoria nel database.
					</p>
					<ul >
						<label class="description" for="nome">Nome della categoria</label>
						<span>
							<div>
								<input name="nome" class="element text" maxlength="255" size="30" value="<? echo $nome; ?>" />
							</div> <label> </label> </span>
						<p class="guidelines" id="guide_1">
							<small>Inserire il nome della categoria</small>
						</p>
						<label class="description" for="descrizione">Descrizione</label>
						<div>
							<textarea rows="20" style="width:240px" name="descrizione" class="element text large" type="text"><? echo $descrizione; ?></textarea>
						</div>
						<p class="guidelines" id="guide_2">
							<small>Inserire la descrizione della categoria.</small>
						</p>
						<input type="hidden" name="form_id" value="register" />
						<input id="saveForm" class="button_text" type="submit" name="submit" value="Modifica" />
					</ul>
				</form>
			</div>
			<!--</div>!-->

			<aside id="leftcolumn">
				<?
				include ("admin-sidebar.php");
				?>
			</aside><!-- #sideLeft -->

			<!--</section>!-->
			<div id="footer">
				<?
				include ("footer.php");
				?>
			</div>
		</div>
	</body>
</html>