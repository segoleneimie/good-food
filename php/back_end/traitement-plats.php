<?php 
// récupération des données du formulaire de contact
$nom = htmlspecialchars($_POST['nomPlat']);
$description = htmlspecialchars($_POST['descriptionPlat']); 

//Là où on range l'image (dans quel dossier)
$dossierDeDirection = "../../images/Plats/plat/";
//on met l'image au bon endroit
$image = $_FILES["imagePlat"];
$cheminDeDirection = $dossierDeDirection.$image["name"];
move_uploaded_file($image["tmp_name"],$cheminDeDirection);

//regarde si c'est une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagePlat"]["tmp_name"]);
    if($check !== false) {
        if (!file_exists($target_file)) {
            move_uploaded_file($image["tmp_name"],$cheminDeDirection);
        }
    }
}

// inscription des données dans un tableau 
$tabPlats = array( array($nom,$cheminDeDirection,$description));

// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi
$plats = fopen('../../csv/plats/plats.csv', 'a');
// encodage pour la lecture sur excel 
fprintf($plats, chr(0xEF).chr(0xBB).chr(0xBF));
//boucle permettant d'enregistrer les données dans le fichier
foreach ($tabPlats as $fields) {
	fputcsv($plats, $fields);
}
// fermeture du fichier csv
fclose($plats); 
//redirection une fois le traitement effectué 
header('Location:back_plats.php');
?>