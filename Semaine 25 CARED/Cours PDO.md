##Creation d'un objet PDO

$db = new PDO($dsn, $user, $password, array opts);

##$dsn => Data Source Name : 
Le type de base de données ( mysql, oralce etc ...) + Host + nom de la base de donnée :
ex : " $dsn = "mysql:dbname=Mydatabase;host=127.0.0.1";
