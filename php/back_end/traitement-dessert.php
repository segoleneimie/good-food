<?php 
// récupération des données du formulaire de contact
$nom = htmlspecialchars($_POST['nomDessert']);
$description = htmlspecialchars($_POST['descriptionDessert']); 

//Là où on range l'image (dans quel dossier)
$dossierDeDirection = "../../images/Plats/dessert/";
//on met l'image au bon endroit
$image = $_FILES["imageDessert"];
$cheminDeDirection = $dossierDeDirection.$image["name"];
move_uploaded_file($image["tmp_name"],$cheminDeDirection);

//regarde si c'est une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageDessert"]["tmp_name"]);
    if($check !== false) {
        if (!file_exists($target_file)) {
            move_uploaded_file($image["tmp_name"],$cheminDeDirection);
        }
    }
}

// inscription des données dans un tableau 
$tabDessert = array( array($nom,$cheminDeDirection,$description));

// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi
$dessert = fopen('../../csv/plats/dessert.csv', 'a');
// encodage pour la lecture sur excel 
fprintf($dessert, chr(0xEF).chr(0xBB).chr(0xBF));
//boucle permettant d'enregistrer les données dans le fichier
foreach ($tabDessert as $fields) {
	fputcsv($dessert, $fields);
}
// fermeture du fichier csv
fclose($dessert); 
//redirection une fois le traitement effectué 
header('Location:back_plats.php');
?>