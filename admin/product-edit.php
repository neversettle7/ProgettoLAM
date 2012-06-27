<?php

session_start();

include_once ('../include/functions.php');

adminlogin($_SESSION['admin']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Modifica prodotto</title>
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

					$id = $_GET['id'];

					if (isset($id)) {

						$query = ('SELECT * FROM prodotti WHERE id = "' . $id . '"');

						$connection = connect();
						$result = dbReaderQuery($query);

						foreach ($result as $key => $value) {
							$descrizione = $value['descrizione'];
							$nome = $value['nome'];
							$quantita = $value['quantita'];
							$prezzo = $value['prezzo'];
						}
					} else {
						echo "Nessun prodotto selezionato. ";
					}
					?>

					<form enctype="multipart/form-data" id="edit-product" method="post" action="product-edit-result.php?id=<? echo $id; ?>">
						<h2>Modifica prodotto</h2>
						<p>
							Modifica i campi della pagina che desideri per modificare il prodotto.
						</p>
						<ul >
							<label class="description" for="nome">Nome del prodotto</label>
							<span>
								<div>
									<input name="nome" class="element text" maxlength="255" size="30" value="<? echo $nome; ?>" />
								</div> <label></label> </span>
							<p class="guidelines" id="guide_1">
								<small>Inserire il nome del prodotto</small>
							</p>
							<label class="description" for="descrizione">Descrizione</label>
							<div>
								<textarea rows="15" style="width:600px" name="descrizione" class="element text large" type="text"><? echo $descrizione ?></textarea>
							</div>
							<p class="guidelines" id="guide_7">
								<small>Inserire la descrizione del prodotto.</small>
							</p>
							<label class="description" for="quantita">Pezzi disponibili</label>
							<div>
								<input name="quantita" class="element text medium" type="text" maxlength="255" size="5" value="<? echo $quantita; ?>" />
							</div>
							<p class="guidelines" id="guide_5">
								<small>Inserire il numero di pezzi disponibili del prodotto.</small>
							</p>
							<label class="description" for="prezzo">Prezzo del prodotto </label>
							<div>
								<input name="prezzo" class="element text medium" type="text" maxlength="255" size="5" value="<? echo $prezzo; ?>"/>
							</div>
							<p class="guidelines" id="guide_6">
								<small>Inserire il prezzo del prodotto.</small>
							</p>
							<label class="category" for="categoria">Categoria</label>
							<div>

								<!-- Questo script permette di selezionare la categoria
								di appartenenza del prodotto scegliendola nella lista
								(popolata dinamicamente durante l'escecuzione di questo
								script) di categorie inserite nel database -->

								<?php

								include_once ("../include/functions.php");

								$query = "SELECT * FROM categorie";

								$connection = connect();
								$result = dbReaderQuery($query);

								foreach ($result as $key => $value) {
									echo '<p><input name="categoria" type="radio" value="' . $value['nome'] . '"/>  ' . $value['nome'];
								}
								?>
							</div>
							<p class="guidelines" id="guide_7">
								<small>Scegliere la categoria di appartenenza del prodotto.</small>
							</p>
							<input type="hidden" name="form_id" value="register" />
							<input id="saveForm" class="button_text" type="submit" name="submit" value="Modifica" />
						</ul>
					</form>
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