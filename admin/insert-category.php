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
				<form enctype="multipart/form-data" id="register" method="post" action="category-result.php">
					<h2>Inserimento categorie</h2>
					<p>
						Compila tutti i campi della pagina per inserire una categoria nel database.
					</p>
					<ul >
						<label class="description" for="nome">Nome della categoria</label>
						<span>
							<div>
								<input name="nome" class="element text" maxlength="255" size="30" value="Nome" onfocus="if (this.value=='Nome') this.value='';"/>
							</div> <label> </label> </span>
						<p class="guidelines" id="guide_1">
							<small>Inserire il nome della categoria</small>
						</p>
						<label class="description" for="descrizione">Descrizione</label>
						<div>
							<textarea rows="20" style="width:240px" name="descrizione" class="element text large" value="Descrizione" type="text" onfocus="if (this.value=='Descrizione') this.value='';"></textarea>
						</div>
						<p class="guidelines" id="guide_2">
							<small>Inserire la descrizione della categoria.</small>
						</p>
						<label class="photo" for="foto">Foto</label>
						<div>
							<input type="file" name="photo" />
						</div>
						<p class="guidelines" id="guide_3">
							<small>Inserire una foto per la categoria (solo jpg e png con dimensione inferiore ai 3500kB ammessi).</small>
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