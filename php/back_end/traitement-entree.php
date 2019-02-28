<?php 
// récupération des données du formulaire de contact
$nom = htmlspecialchars($_POST['nom']);
$description = htmlspecialchars($_POST['description']); 

//Là où on range l'image (dans quel dossier)
$dossierDeDirection = "../../images/Plats/Entree/";
//on met l'image au bon endroit
$image = $_FILES["image"];
$cheminDeDirection = $dossierDeDirection.$image["name"];
move_uploaded_file($image["tmp_name"],$cheminDeDirection);

//regarde si c'est une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    //si c'est une image
    if($check !== false) {
        //vérifie si l'image existe déja dans le dossier, si non l'importe
        if (!file_exists($target_file)) {
            move_uploaded_file($image["tmp_name"],$cheminDeDirection);
        }
    }
}

// inscription des données dans un tableau 
$tabEntree = array( array($nom,$cheminDeDirection,$description));

// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi
$entree = fopen('../../csv/plats/entree.csv', 'a');
// encodage pour la lecture sur excel 
fprintf($entree, chr(0xEF).chr(0xBB).chr(0xBF));
//boucle permettant d'enregistrer les données dans le fichier
foreach ($tabEntree as $fields) {
	fputcsv($entree, $fields);
}
// fermeture du fichier csv
fclose($entree); 
//redirection une fois le traitement effectué 
header('Location:back_plats.php');
?>