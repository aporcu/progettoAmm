<?php 
	include ("../Html/config.php");  	//richiamo il file di configurazione per il database

	//Creo l'istanza della classe mysqli
	$mysqli = new mysqli();

	//connessione al database
	$mysqli -> connect(Settings::$db_host, 
					   Settings::$db_user, 
					   Settings::$db_password,
					   Settings::$db_name);
		
	if ($mysqli->connect_errno !=0) {
		//gestione errore
    	$idErrore = $mysqli->connect_errno;
    	$msg = $mysqli->connect_error;
    	error_log("Errore nella connessione al server $idErrore : $msg", 0);
    	echo "Errore nella connessione $msg";
	}

?>
 