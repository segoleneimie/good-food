<?php 
// récupération des données du formulaire de candidature
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail=htmlspecialchars($_POST['email']); 
$cv=$_FILES['cv'];
$texte=htmlspecialchars($_POST['motivations']);

//gestion des formats du cv
//création d'un tableau d'extensions autorisées
$extensionsAutho = array(".doc",".docx",".pdf");
//récupération de l'extension du fichier
$extensionReelle = strrchr($cv['name'], '.');


// vérif des champs s'il n'est pas rempli ou vide on demande de le remplir
if (!isset($_POST['nom']) || $nom == ""){
    echo ("Vous devez préciser votre nom"."</br>");
}   elseif (!isset($_POST['prenom']) || $prenom == ""){
        echo ("Vous devez préciser votre prénom"."</br>");
    }   elseif (!isset($_POST['email']) || $mail == ""){
            echo ("Vous devez préciser votre mail"."</br>");
        }
//si le cv n'est pas joint 
            elseif (!isset($cv)){
                echo "Vous devez joindre votre cv";
            } 
// comparaison de l'extension réelle avec celle authorisées
                else if(!in_array($extensionReelle,$extensionsAutho)){ //Si l'extension n'est pas dans le tableau
                    echo "Vous devez uploader un fichier de type doc, docx, pdf. </br> <a href='notreEquipeCandidat.php'>Retour</a>";
                    } else {

                        //gestion du fichier
                        //fichier de destination des cv
                        $destinationDirectory='../cv/ ';
                         
                        $cvName=$cv['name'];
                        //renommer le fichier avec le prenom_nom.extension 
                        //strrchr($cv['name'], '.') permet de récupérer l'extension de fichier uploadé
                        $cvName=$prenom.'_'.$nom.strrchr($cv['name'], '.');
                        //chemin des cv
                        $destinationPath=$destinationDirectory.$cvName;
                        
                        //enregistrement des cv à l'emplacement souhaité
                        move_uploaded_file($cv['tmp_name'], $destinationPath);

                        // inscription des données dans un tableau 
                        $tabCandidat=array ( array ($prenom,$nom,$mail,$destinationPath,$texte));
                        // génération du csv et écriture 
                        // utilisation du "a" pour une écriture à la fin du fichier et non pour supprimer à chaque nouvel envoi

                        $candidat = fopen('../csv/candidat.csv', 'a');

                        // encodage pour la lecture sur excel 
                        fprintf($candidat, chr(0xEF).chr(0xBB).chr(0xBF));

                        //boucle permettant d'enregistrer les données dans le fichier
                        foreach ($tabCandidat as $fields) {
                            fputcsv($candidat, $fields);
                        }

                        // fermeture du fichier csv
                        fclose($candidat); 

                        //redirection une fois le traitement effectué 

                        header('Location:notreEquipeCandidat.php');
}?>
