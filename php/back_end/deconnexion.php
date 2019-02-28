<?php 
session_start ();

// on stop la session et détruit les infos de la connexion
 	session_unset();
	session_destroy();
	
	// echo '<article >
	// 		<h1>Merci pour votre visite</h1>
	// 	</article>';
	// echo '<a href="../accueil.php">retour vers le site</a>';
header('location : ../accueil.php');


 ?>