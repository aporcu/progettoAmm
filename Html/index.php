<!DOCTYPE html>
<html>
    <head>
	   	<title>Cucina</title>
	   	<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
	   	<link rel="shortcut icon" type="image/x-icon" href="../Immagini/icon.ico" />
	   	<link href="../Css/stile.css" rel="stylesheet" type="text/css" media="screen" />
	
	</head>

    <body>

    <!-- Header -->
    	<header>
    		<img id="logoimg" title="logo" alt="logo Cucina" src="../Immagini/logo.jpg" width="175" height="132"/>
    		<a rel="home" href="../Html/index.php"><h1> Cucina </h1></a>
    	</header>
    
	<!-- Sidebar -->
		<div id="sidebar">
			<h2 class="sidetitle">Navigazione</h2>
			<ul>
				<li><a href="../Html/primi.php">Primi Piatti </a></li>
				<li><a href="../Html/secondi.php">Secondi Piatti </a></li>
				<li><a href="../Html/desserts.php">Desserts </a></li>
			</ul>
		</div>
	   	

		<div id="formlog">

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
	
	<!-- Footer -->
		<p>
			<a href="http://validator.w3.org/check/referer" title="HTML Valido" target="_blank"> HTML Validator </a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS Valido" target="_blank"> CSS Validator </a>
		</p>








	</body>
</html>