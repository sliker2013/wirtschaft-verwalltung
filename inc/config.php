<?php
    define('DB_HOST', 'bund-des-schatten.de');
    define('DB_USER', 'ni579393_1sql1');
    define('DB_PASSWORD', 'masterpw');
    define('DB_DATABASE', 'ni579393_1sql1');
	
	
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) OR DIE ("Keine Verbindung zu der Datenbank moeglich.");
$db = mysql_select_db(DB_DATABASE , $connection) OR DIE ("Auswahl der Datenbank nicht moeglich."); 

error_reporting(E_ALL ^ E_NOTICE);
?>
