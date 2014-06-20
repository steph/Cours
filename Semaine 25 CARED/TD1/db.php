<?php
require_once("config.php");

function connect() {
	$link = mysql_connect($dbConfig['hote'], $dbConfig['user'], $dbConfig['pass'])
		or die("Impossible de se connecter : " . mysql_error());

	if (mysql_select_db($dbConfig['db']) === FALSE) {
		die ("Impossible de sélectionner la base de données : " . mysql_error());
	}

	return $link;
}

function close() { 
	mysql_close();
}