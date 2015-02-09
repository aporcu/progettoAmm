<?php 
	include ("../Html/config.php");  	//richiamo il file di configurazione per il database

	$conn = new mysqli($db_host, $db_user, $db_psw, $db_name);
		
	if ($conn->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
	echo $conn->host_info . "\n";
	
	//chiusura connessione
	$conn->close();

?>
 