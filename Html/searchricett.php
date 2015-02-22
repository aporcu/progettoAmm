<?php
	include ("../Html/connessione.php");

	$stmt = $mysqli->stmt_init();

	$query = "SELECT idRicetta, titolo, descrizione FROM ricette NATURAL JOIN tipoRicetta WHERE tipoRicetta = ?";
	
	// preparo lo statement per l'esecuzione
	if(!$stmt->prepare($query))		//gestione dell'errore
	{
		echo "Prepare failed:(".$mysqli->errno. ")".$mysqli->error;
	}
	
	if(!$stmt->bind_param("s", $namepg))	//gestione dell'errore
	{
		echo "Binding parameters failed:(".$mysqli->errno. ")".$mysqli->error;
	}
	
	$namepg = $_POST['namepg'];

	// eseguiamo la query
	if(!$stmt->execute()) {	//gestione dell'errore
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	$stmt->store_result();
   
	$stmt->bind_result($idRicetta, $titolo, $descrizione);
	
	// ciclo sulle righe che la query ha restituito
	while($stmt->fetch()){
	// ho nelle varibili dei risultati il contenuto delle colonne
			echo "<tr>
						<td>$idRicetta</td>
						<td>$titolo</td>
						<td><textarea rows='4' cols='50' disabled>$descrizione</textarea></td>
					</tr>";
	}

	$stmt->close();	//libera le risorse dello statement

?>