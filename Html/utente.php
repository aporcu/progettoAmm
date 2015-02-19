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
				include ("../Html/sidebar.php");
			?>

			<!-- Sidebar destra richiamata con una include -->
			<?php
				include ("../Html/sidebar2.php");
			?>

			<div id="homeut">
				<table>
					<tr>
						<td><img id="logoprimi" title="primi" alt="Miniatura Primi" src="../Immagini/primi.jpg" width="200" height="110"/></td>
						<td class="tabtit"><a href="http://spano.sc.unica.it/amm2014/porcuAlessandro/Html/primi.php"> Primi Piatti </a></td>
					</tr>
						<td></td>
						<td class="tabtext">qui sfkldjsdf dfkljsfdlkja asfadflkjasdfadf sadfjkasdkfjasdf</td>
					</tr>
				</table>

				<table>
					<tr>
						<td><img id="logosecondi" title="secondi" alt="Miniatura Secondi" src="../Immagini/secondi.jpg" width="200" height="110"/></td>
						<td class="tabtit"><a href="http://spano.sc.unica.it/amm2014/porcuAlessandro/Html/secondi.php"> Secondi Piatti </a></td>
					</tr>
						<td></td>
						<td class="tabtext">qui sfkldjsdf dfkljsfdlkja asfadflkjasdfadf sadfjkasdkfjasdf</td>
					</tr>
				</table>

				<table>
					<tr>
						<td><img id="logodolci" title="dolci" alt="Miniatura Dolci" src="../Immagini/dolci.jpg" width="200" height="110"/></td>
						<td class="tabtit"><a href="http://spano.sc.unica.it/amm2014/porcuAlessandro/Html/desserts.php"> Desserts </a></td>
					</tr>
						<td></td>
						<td class="tabtext">qui sfkldjsdf dfkljsfdlkja asfadflkjasdfadf sadfjkasdkfjasdf</td>
					</tr>
				</table>
			</div>
		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php");
		?>

	</body>
</html>

