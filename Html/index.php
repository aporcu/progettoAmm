<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />
	
	</head>

    <body>

    	<!-- Header richiamato con una include -->
      	<?php 
    		include ("../Html/header.php")   
    	?>
    	
    	<!-- Sidebar sinistra richiamata con una include -->
			<?php 
				include ("../Html/sidebar.php")
			?>

			<!-- Sidebar destra richiamata con una include -->
			<?php
				include ("../Html/sidebar2.php")
			?>

    	<div id="contenuto">

			<div id="content">

	   			<h2>Login</h2>
				<br/>       
	
				<form method="post" action="login">
	
				<!-- campo del form per lo username  -->
				<label for="nome">Username</label>                       
				<input name="nome" id="nome" type="text"/>
				<br/>

				<!-- campo del form per la password -->
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				<br/>

				<button type="submit">Login</button>
				</form>
			</div>

		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php")
		?>

	</body>
</html>
