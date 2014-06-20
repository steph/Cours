<?php

echo "message";

$i=-1;

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
	<h1>TD1 : Formulaire annuaire</h1>
	<p>Présentation de l'exercice élément du formulaire : 
		<ul>
			<li>Nom</li>
			<li>Prénom</li>
			<li>Numéro de telephone</li>
		</ul>
	</p>
	<div>
		<form method="POST" action="valid.php">
			<label for="first_name">Nom : <input type="text" name="first_name" id="first_name"/></label>
			<label for="last_name">Prénom : <input type="text" name="last_name" id="last_name"/></label>
			<label for="phone">Telephone : <input type="text" name="phone" id="phone"/></label>
			<input type="submit" name="submit" value="Enregistrer"/>
		</form>
	</div>
</body>
</html>
