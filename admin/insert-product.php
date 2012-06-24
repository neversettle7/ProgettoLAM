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
				<form enctype="multipart/form-data" id="insert-product" method="post" action="product-result.php">
					<h2>Inserimento prodotti</h2>
					<p>
						Compila tutti i campi della pagina per inserire un prodotto nel database.
					</p>
					<ul >
						<label class="description" for="nome">Nome del prodotto</label>
						<span>
							<div>
								<input name="nome" class="element text" maxlength="255" size="30" value="Nome" onfocus="if (this.value=='Nome') this.value='';"/>
							</div> <label></label> </span>
						<p class="guidelines" id="guide_1">
							<small>Inserire il nome del prodotto</small>
						</p>
						<label class="description" for="descrizione">Descrizione</label>
						<div>
							<textarea rows="20" style="width:240px" name="descrizione" class="element text large" value="Descrizione" type="text" onfocus="if (this.value=='Descrizione') this.value='';"></textarea>
						</div>
						<p class="guidelines" id="guide_7">
							<small>Inserire la descrizione del prodotto.</small>
						</p>
						<label class="description" for="quantita">Pezzi disponibili</label>
						<div>
							<input name="quantita" class="element text medium" type="text" maxlength="255" size="5" value="1" onfocus="if (this.value=='1') this.value='';"/>
						</div>
						<p class="guidelines" id="guide_5">
							<small>Inserire il numero di pezzi disponibili del prodotto.</small>
						</p>
						<label class="description" for="prezzo">Prezzo del prodotto </label>
						<div>
							<input name="prezzo" class="element text medium" type="text" maxlength="255" size="5" value=""/>
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
						<label class="photo" for="foto">Foto</label>
						<div>
							<input type="file" name="photo" />
						</div>
						<p class="guidelines" id="guide_7">
							<small>Inserire una foto per il prodotto (solo jpg e png con dimensione inferiore ai 3500kB ammessi).</small>
						</p>
						<input type="hidden" name="form_id" value="register" />
						<input id="saveForm" class="button_text" type="submit" name="submit" value="Inserisci" />
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