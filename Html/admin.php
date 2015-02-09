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
    		include ("../Html/header.php");   
    	?>
    	
    	<div id="contenuto">

    	
			<!-- Sidebar sinistra richiamata con una include -->
			<?php 
				include ("../Html/sidebaradmin.php");
			?>

			<!-- Sidebar destra richiamata con una include -->
			<?php
				include ("../Html/sidebar2.php");
			?>

		<div id="content">

			<form method="post" action="aggiungi">	
				<table>
					<tr>
						<th>Aggiungi una ricetta </th>
						<th></th>
					</tr>
					<tr>
						<td>Seleziona il tipo di ricetta</td>
						<td></td>
					</tr>
					<tr>						
						<td><label for="primi"> Primo </label></td>
						<td><input type="radio" name="tipo" id="primo" value="primo"></td>
					</tr>
					<tr>
						<td><label for="secondo"> Secondo </label></td>
						<td><input type="radio" name="tipo" id="secondo" value="secondo"></td>
					</tr>
					<tr>
						<td><label for="dolce"> Dessert </label></td>
						<td><input type="radio" name="tipo" id="dolce" value="dolce"></td>
					</tr>
					<tr>
						<td><label for="titolo"> Titolo Ricetta </label></td>
						<td><input type="text" name="titolo" id="titolo" value="Scegli un titolo"></td>
					</tr>
					<tr>
						<td><label for="immagine"> Carica un'immagine </label></td>
						<td><input type="file" name="immagine" id="immagine"></td>
					</tr>
					<tr>
						<td><label for="descrizione"> Spiegazione ricetta </label></td>
						<td><textarea rows="15" cols="45" name="descrizione" id="descrizione"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit"> Aggiungi </button></td>
					</tr>
				</table>					
			</form>
		</div>
    


		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php");
		?>

	</body>
</html>

