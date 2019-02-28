<?php
    // définition de l'identifiant et du mot de passe
    $login_valide = "admin";
    $mdp_valide = "admin";

    // si les variables sont remplies
    if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {

    	// vérification que les données rentrées sont les bonnes
    	if ($login_valide == $_POST['identifiant'] && $mdp_valide == $_POST['mdp']) {
    	

    		// on la démarre la session
    		session_start ();
    		// on enregistre les paramètres comme variables de session
    		$_SESSION['identifiant'] = $_POST['identifiant'];
    		$_SESSION['motdepasse'] = $_POST['motdepasse'];

    		// on redirige notre visiteur vers une page de notre section membre
    		header ('location: back_end/back_accueil.php');
    	}
    	else {
            // ou on affiche un message d'erreur
            echo '<p>Veuillez saisir un identifiant et un mot de passe valides.</p>';
            echo '<a href="cookie.php">retour</a>';
        }
    }

    ?> 