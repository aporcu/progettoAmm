<?php 
	include ("../Html/connessione.php");

	//inizializzo il prepared statement
	$stmt = $conn->stmt_init();

	$query = "INSERT INTO ricette (titolo, immagine, descrizione, idTipoRicetta) VALUES (?, ?, ?, ?)";

	//preparo la query
	$stmt->prepare($query);

	//collego i parametri
	$stmt->bind_param("ssss", $_POST['titolo'], $_POST['immagine'], $_POST['descrizione'], $_POST['idTipoRicetta']);


	if ($stmt->execute()) {
    	echo "ok";
	}
	else {
		echo "zobbia";
	}

	//$var=$_POST['titolo'];
	//echo $var;
?>