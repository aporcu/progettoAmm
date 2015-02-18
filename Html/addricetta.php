<?php 
	include ("../Html/connessione.php");

	//inizializzo il prepared statement
	$stmt = $$conn->stmt_init();

	$query = "INSERT INTO ricette (titolo, immagine, descrizione, idTipoRicetta) VALUES (:titolo, :immagine, :descrizione, :idTipoRicetta)";

	//preparo la query
	$stmt->prepare($query);

	//collego i parametri
	$stmt->bind_param(':titolo', $_POST['titolo']);
	$stmt->bind_param(':immagine', $_POST['immagine']);
	$stmt->bind_param(':descrizione', $_POST['descrizione']);
	$stmt->bind_param(':idTipoRicetta', $_POST['idTipoRicetta']);


	if ($stmt->execute()) {
    	echo "ok";
	}
	else {
		echo "zobbia";
	}

	$var=$_POST['titolo'];
	echo $var;
?>