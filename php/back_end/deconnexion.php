<?php 
session_start ();

// on stop la session et détruit les infos de la connexion
 	session_unset();
	session_destroy();
	
	echo '<h1>Merci pour votre visite</h1></br>';
	echo '<a href="../accueil.php">retour vers le site</a>';



 ?>