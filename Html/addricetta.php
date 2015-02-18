<?php 
	include ("../Html/connessione.php");

	//inizializzo il prepared statement
	$stmt = $conn->stmt_init();

	$query = "INSERT INTO ricette (titolo, descrizione, idTipoRicetta) VALUES (?, ?, ?)";

	//preparo la query
	$stmt->prepare($query);

	//collego i parametri
	$stmt->bind_param("ssss", $tit, $desc, $idTipo);
	$tit = 'sdkasjdas';
	$desc = 'djhadjdkdkadskdskjadskj';
	$idTipo = '1';

	if ($stmt->execute()) {
    	echo "ok";
	}
	else {
		echo "zobbia";
	}

	//$var=$_POST['titolo'];
	//echo $var;
?>