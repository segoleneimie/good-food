<?php 
// récupération des données du formulaire de candidature
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$mail=htmlspecialchars($_POST['email']); 
$cv=$_FILES['cv'];
$texte=htmlspecialchars($_POST['motivations']);


//gestion du fichier
//fichier de destination des cv
$destinationDirectory='C:\laragon\www\good-food\cv\ ';
//chemin des cv 
$cvName=$cv['name'];
//renommer le fichier avec le prenom_nom.extension 
//strrchr($cv['name'], '.') permet de récupérer l'extension de fichier uploadé
$cvName=$prenom.'_'.$nom.strrchr($cv['name'], '.');
$destinationPath=$destinationDirectory.$cvName;
//enregistrement des cv à l'emplacement souahité

move_uploaded_file($cv['tmp_name'], $destinationPath);


// inscription des données dans un tableau 
$tabCandidat=array ( array ($prenom,$nom,$mail,$texte));
// génération du csv et écriture 
// utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi

$candidat = fopen('C:\laragon\www\good-food\csv\candidat.csv', 'a');

// encodage pour la lecture sur excel 
fprintf($candidat, chr(0xEF).chr(0xBB).chr(0xBF));

//boucle permettant d'enregistrer les données dans le fichier
foreach ($tabCandidat as $fields) {
	fputcsv($candidat, $fields);
}

// fermeture du fichier csv
fclose($candidat); 

//redirection une fois le traitement effectué 

header('Location:http://localhost/good-food/php/notreEquipeCandidat.php');
?>
