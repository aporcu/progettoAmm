<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina - Desserts</title>
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

			<!-- Sidebar sinistra richiamata con una include -->
			<?php 
				include ("../Html/sidebar.php")
			?>

			<!-- Sidebar destra richiamata con una include -->
			<?php
				include ("../Html/sidebar2.php")
			?>

		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php")
		?>

	</body>
</html>

