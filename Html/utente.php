<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina - Utente</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />
	
	</head>

    <body>

    	<!-- Header richiamato con una include -->
      	<?php 
    		include ("../Html/header.php"); 
    	?>
    	
    	<div id="contenuto">

			<!-- Sidebar sinistra richiamata con una include -->
			<?php 
				include ("../Html/sidebaruser.php");
			?>

			<!-- Sidebar destra richiamata con una include -->
			<?php
				include ("../Html/sidebar2.php");
			?>

			<div id="homeut">
				
				<img id="logoprimi" title="primi" alt="Miniatura Primi" src="../Immagini/primi.jpg" width="150" height="80"/>
				<h3> Primi Piatti </h3>
				qui sfkldjsdf dfkljsfdlkja asfadflkjasdfadf sadfjkasdkfjasdf 

				<img id="logosecondi" title="secondi" alt="Miniatura Secondi" src="../Immagini/secondi.jpg" width="150" height="80"/>
				<h3> Secondi Piatti </h3>
				qui sfkldjsdf dfkljsfdlkja asfadflkjasdfadf sadfjkasdkfjasdf 

				<img id="logodolci" title="dolci" alt="Miniatura Dolci" src="../Immagini/dolci.jpg" width="150" height="80"/>
				<h3> Desserts </h3>
				qui sfkldjsdf dfkljsfdlkja asfadflkjasdfadf sadfjkasdkfjasdf 

			</div>
		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php");
		?>

	</body>
</html>

