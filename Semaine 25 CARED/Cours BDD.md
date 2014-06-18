# Base de donnée

## Définition

Une base de données (en anglais : database) est un conteneur informatique permettant de stocker -le plus souvent dans un même lieu- l'intégralité des informations en rapport avec une activité. Une base de données permet de stocker et de retrouver un ensemble d'informations de plusieurs natures ainsi que les liens qui existent entre les différentes informations.

Une base de données est la pièce centrale des dispositifs informatiques qui servent à la collecte, le stockage, le travail et l'utilisation d'informations. Le dispositif comporte un système de gestion de base de données (abr. SGBD) : un logiciel moteur qui manipule la base de données et dirige l'accès à son contenu.

## Description 

Une base de données est un conteneur servant à stocker des données2: des renseignements bruts tels que des chiffres, des dates ou des mots, qui peuvent être retraités par des moyens informatiques en vue de produire une information; par exemple, des chiffres et des noms assemblés et triés pour former un annuaire téléphonique. Les retraitements sont typiquement une combinaison d'opérations de recherches, de choix, de tri, de regroupement, et de concaténation.

## Lexique

  - Modèle de données : 
 	Le schéma ou modèle de données, est la description de l'organisation des données. Il se trouve à l'intérieur de la base de données, et renseigne sur les caractéristiques de chaque type de donnée et les relations entre les différentes données qui se trouvent dans la base de données. Il existe plusieurs types de modèles de données (relationnel, entité-association, objet, hiérarchique et réseau).

  - Modèle de données logique et physique : 
 	Le modèle de données logique - ou conceptuel - est la description des données telles qu'elles sont dans la pratique, tandis que le modèle de données physique est un modèle dérivé du modèle logique qui décrit comment les données seront techniquement stockées dans la base de données.

  - Entité : 
  	Une entité est un objet, un sujet, une notion en rapport avec le domaine d'activité pour lequel la base de données est utilisée, et concernant lequel des données sont enregistrées (exemple: des personnes, des produits, des commandes, des réservations, …)

  - Attribut :
  	Un attribut est une caractéristique d'une entité susceptible d'être enregistrée dans la base de données. Par exemple une personne (entité), son nom et son adresse (des attributs). Les attributs sont également appelés des champs ou des colonnes. Dans le schéma les entités sont décrites comme un lot d'attributs en rapport avec un sujet.

  - Enregistrement :
  	Un enregistrement est une donnée composite qui comporte plusieurs champs dans chacun desquels est enregistrée une donnée.

  - Association :
  	Les associations désignent les liens qui existent entre différentes entités, par exemple entre un vendeur, un client et un magasin.

  - Cardinalité :
  	La cardinalité d'une association - d'un lien entre deux entités A et B - est le nombre de A pour lesquelles il existe un B et inversement. Celle-ci peut être un-a-un, un-a-plusieurs ou plusieurs-à-plusieurs. Par exemple un compte bancaire appartient à un seul client, et un client peut avoir plusieurs comptes bancaires (cardinalité un-a-plusieurs).

  - Nul : 
  	Dans les modèles de données relationnels, un attribut peut avoir une valeur nulle, indiquant que la donnée est absente, non disponible ou inapplicable.

  - Clé primaire :
  	Dans les modèles de données relationnels, la clé primaire est un attribut dont le contenu est différent pour chaque enregistrement de la table, ce qui permet de retrouver un et un seul enregistrement.

  - Clé étrangère
	Dans les modèles de données relationnels, une clé étrangère est un attribut qui contient une référence à une donnée connexe - dans les faits la valeur de la clé primaire de la donnée connexe.

## Mot-clés

	INSERT
	UPDATE
	SELECT
	DELETE
	LIMIT
	GROUP BY
	JOIN

## Différente SGBD

  - Mysql : c'est un système de gestion de bases de données relationnelles apparu en 1995.
  - PostgreSQL : c'est un système de gestion de base de données relationnelle et objet apparu en 1995.
  - SQLite est une bibliothèque écrite en C qui propose un moteur de base de données 	relationnelle accessible par le langage SQL.
  - MariaDB est un système de gestion de base de données édité sous licence GPL. Il s'agit d'un fork communautaire de MySQL : la gouvernance du projet est assurée par la fondation MariaDB, et sa maintenance par la société Monty Program AB, créateur du projet. Cette gouvernance confère au logiciel l’assurance de rester libre.
  - Oracle.
  - NoSQL.

## Du coté de PHP

 - L'extension MySQL de PHP est un pilote qui permet l'interfaçage avec le langage d'une base de donnée MySQL

 - L'extension MySQLi (abréviation pour MySQL Improved en anglais, c'est-à-dire, en français, MySQL Amélioré) est un pilote qui permet d'interfacer des programmes écrits dans le langage de programmation PHP avec les bases de données MySQL.

 - PDO (PHP Data Objects), extension définissant l'interface pour accéder à une base de données depuis PHP. Elle est orientée objet, la classe s’appelant PDO. Peu importe le SGBD utilisé, le code est unique, ce qui permet un "déplacement" rapide, puisqu'il faut juste changer les arguments envoyés au constructeur.

## Outil de développement

  - PhpMyAdmin
  - MySQL Workbench
  - Adminer
  - PowerAMC
  - SQL Server

## Command

CREATE DATABASE db_name; => Création d'une base de donnée

 