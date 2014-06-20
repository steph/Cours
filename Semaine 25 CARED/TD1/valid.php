<?php
require_once('db.php');

	//Vérification du POST
	$post = $_POST;

	if (!empty($post) && isset($post['submit']) && $post['submit'] == 'Enregistrer') {
		//Vérification des élements
		
		if (!empty($post['first_name']) && !empty($post['last_name'])) {
		//Insertion
			//	Connect
			$link = connect();
			//	Select DB
			
			//	Query -> Insert
			
			//	Close
			close();
		}
	}
	header('Location: http://www.project.dev/index.php');


