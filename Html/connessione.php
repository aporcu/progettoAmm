<?php 
	include ("../Html/config.php");  	//richiamo il file di configurazione per il database

$mysqli = new mysqli($db_host, $db_user, $db_psw, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>
 