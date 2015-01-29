<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina - Admin</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />
	
	</head>

    <body>

    	<!-- Header richiamato con una include -->
      	<?php 
    		include ("../Html/header.php")
    	?>

    	<div id="contenuto">
		
			<!-- Sidebar richiamata con una include -->
			<?php 
				include ("../Html/sidebaradmin.php")
			?>

			<div id="content">


				<form method="post" action="aggiungi">	
					<h2> Aggiungi una ricetta </h2>
					<h3> Seleziona il tipo di ricetta</h3>
						<p>
							<!-- radio buttons per la selezione del tipo di ricetta -->
							<label for="primi"> Primo </label>
							<input type="radio" name="tipo" id="primo" value="primo"> </br>
		
							<label for="secondo"> Secondo </label>
							<input type="radio" name="tipo" id="secondo" value="secondo"> </br>
		
							<label for="dolce"> Dessert </label>
							<input type="radio" name="tipo" id="dolce" value="dolce"> </br>
						</p> 
				
						<p>
							<!-- Input per titolo ricetta -->
							<label for="titolo"> Titolo Ricetta </label>
							<input type="text" name="titolo" id="titolo" value="Scegli un titolo">
						</p>

						<p>
							<!-- Input per la descrizione della ricetta -->
							<label for="descrizione"> Spiegazione ricetta </label>
							<textarea rows="15" cols="45" name="descrizione" id="descrizione">
							Spiega la preparazione
							</textarea>

						<button type="submit"> Aggiungi </button>

						</p>
				</form>
			</div>
		</div>

		<!-- Footer richiamata con una include -->
		<?php
			include ("../Html/footer.php")
		?>


	</body>
</html>
