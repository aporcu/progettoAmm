<?php 
	include ("../Html/config.php");  						//richiamo il file di configurazione per il database
	
	try {  													//provo la connessione al database in caso contrario catturo l'eccezione
			$db = new PDO("$dsn","$db_user","$db_psw");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //imposta il lancio delle eccezioni
			echo "ok";
	} 
	catch (Exception $e) {
			echo 'Attenzione:'.$e->getMessage();
		
	}
?>