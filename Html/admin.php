<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina - Admin</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />
	
	</head>

    <body>

    <!-- Header -->
    	<header>
    		<img id="logoimg" title="logo" alt="logo Cucina" src="../Immagini/logo.jpg" width="175" height="132"/>
    		<a href="../Html/index.php"><h1> Cucina </h1></a>
    	</header>
    
	<!-- Sidebar -->
		<div id="sidebar">
			<h2 class="sidetitle">Navigazione</h2>
			<ul>
				<li><a href="../Html/admin.php">Home </a></li>
				<li><a href="../Html/primi.php">Primi Piatti </a></li>
				<li><a href="../Html/secondi.php">Secondi Piatti </a></li>
				<li><a href="../Html/desserts.php">Desserts </a></li>
			</ul>
		</div>

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
					<textarea rows="10" cols="30" name="descrizione" id="descrizione">
						Spiega la preparazione
					</textarea>

				<button type="submit"> Aggiungi </button>

				</p>
		</form>
	</div>


	<!-- Footer -->
		<footer>
		<p>
			<a href="http://validator.w3.org/check/referer" title="HTML Valido" target="_blank"> HTML Validator </a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS Valido" target="_blank"> CSS Validator </a>
		</p>
		</footer>







	</body>
</html>
