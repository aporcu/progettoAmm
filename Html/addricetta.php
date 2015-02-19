<?php 
	include ("../Html/connessione.php");

	$stmt = $mysqli->stmt_init();

	$query = "INSERT INTO ricette (titolo, descrizione, idTipoRicetta) VALUES (?, ?, ?)";

	//Preparo lo statement per l'esecuzione
	if(!$stmt->prepare($query))		//gestione dell'errore
	{
		echo "Prepare failed:(".$mysqli->errno. ")".$mysqli->error;
	}
	
	//Collego i parametri della query con il loro tipo
	if(!$stmt->bind_param("ssi", $tit, $desc, $idTipRic))	//gestione dell'errore
	{
		echo "Binding parameters failed:(".$mysqli->errno. ")".$mysqli->error;
	}

	$tit = $_POST['titolo'];
	$desc = $_POST['descrizione'];
	$idTipRic = $_POST['tipo'];

	//esegue la query
	if(!$stmt->execute()) {	//gestione dell'errore
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	echo "La ricetta è stata inserita correttamente!";

?>