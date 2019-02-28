<?php 
// récupération des données du formulaire de contact
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$mail=htmlspecialchars($_POST['mail']); 
$evenement=htmlspecialchars($_POST['evenement']);
$date=htmlspecialchars($_POST['date']);
$texte=htmlspecialchars($_POST['precisions']);


// inscription des données dans un tableau 
$tabContact=array ( array ($prenom,$nom,$mail,$evenement,$date,$texte));


// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi

$contact = fopen('C:\laragon\www\good-food\csv\contact.csv', 'a');

// encodage pour la lecture sur excel 
fprintf($contact, chr(0xEF).chr(0xBB).chr(0xBF));

//boucle permettant d'enregistrer les données dans le fichier
foreach ($tabContact as $fields) {
	fputcsv($contact, $fields);
}

// fermeture du fichier csv
fclose($contact); 

//redirection une fois le traitement effectué 

header('Location:contact.php');
?>

