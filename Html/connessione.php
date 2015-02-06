<?php 
	include ("../Html/config.php");  						//richiamo il file di configurazione per il database
	
	try {  													//provo la connessione al database in caso contrario catturo l'eccezione
			$db = new PDO("$dsn","$db_user","$db_psw");

	} 
	catch (Exception $e) {
			echo "problemi di connessione";
		
	}
?>