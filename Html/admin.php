<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina - Admin</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />

	   	  <script type="text/javascript" src="jquery.js"> </script>
          <script type="text/javascript" src="../JS/addricetta.js"> </script>
	
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

			<!-- Richiamo il form per l'aggiunta delle ricette -->
			<?php
				include ("../Html/formricetta.php")
			?>
    


		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php");
		?>

	</body>
</html>

