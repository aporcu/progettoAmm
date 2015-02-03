<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />
	
	</head>

    <body>

    	
    	
    	<div id="contenuto">
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

			<div id="content">
				<form method="post" action="login">
				
				<h2> Login </h2>

				<table>
					<tr>
						<td> <label for="nome">Username</label> </td>                     
						<td> <input name="nome" id="nome" type="text"/> </td>  
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password" id="password"></td>
					</tr>

					<tr>
						<td></td>
						<td><button type="submit">Login</button></td>
					</tr>
				</table>
				</form>
			</div>

		</div>

		<!-- Footer richiamato con una include -->
		<?php
			include ("../Html/footer.php")
		?>

	</body>
</html>
