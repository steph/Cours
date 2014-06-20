<?php

$link = mysql_connect("localhost", "socle", "0000")
	or die("Impossible de se connecter : " . mysql_error());

echo 'Connexion réussie <br>';

if (mysql_select_db("socle") === FALSE) {
	die ("Impossible de sélectionner la base de données : " . mysql_error());
}

$query = "SELECT `id`, `numeros` AS `telephone`
			FROM `users` AS `u`
			INNER JOIN `phone` AS `p`
			ON `u`.`id` = `p`.`id_users`;";

$result = mysql_query($query);

if (!$result) {
	die("Requête invalide : " . mysql_error());
}

/*
 * Si plusieurs colonnes portent le même nom, la dernière aura la priorité.
 * Pour accéder aux autres colonnes du même nom, vous devez utiliser la fonction
 * mysql_fetch_row() avec les indices numériques ou utiliser les alias sur les noms.
 * Regardez la documentation sur la fonction mysql_fetch_array() pour plus 
 * d'informations sur les alias.
 */

while($fetch = mysql_fetch_assoc($result))
{
	var_dump($fetch);
}

mysql_close($link);


