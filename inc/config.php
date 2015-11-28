<?php
    define('DB_HOST', 'Addresse');
    define('DB_USER', 'USER');
    define('DB_PASSWORD', 'password');
    define('DB_DATABASE', 'datenbank');
	
	
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) OR DIE ("Keine Verbindung zu der Datenbank moeglich.");
$db = mysql_select_db(DB_DATABASE , $connection) OR DIE ("Auswahl der Datenbank nicht moeglich."); 

error_reporting(E_ALL ^ E_NOTICE);
?>
