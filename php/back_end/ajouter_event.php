<?php include('header.php') ?>

<?php
//nombre de sous-titre + texte a mettre
$nombre = htmlspecialchars($_POST['nombre']); 
//salon, atelier ou traiteur
$type = htmlspecialchars($_POST['typeEvent']);

?>

<!-- Renvois a la page de traitement pour ajouter -->
<form method="post" action="traitement-activite.php" enctype="multipart/form-data">
    <label>Titre de l'activité : 
<!--    Titre-->
        <input type="text" name="titre">
    </label>
    <label>Image : 
<!--    image -->
        <input type="file" name="image">
    </label>
    <label>Description : 
<!--    description-->
        <input type="textarea" name="description">
    </label>
    
    <?php
    //type d'événement (caché pour que l'utilisateur n'y touche pas
    echo '<input type="text" name="typeEvent" value="'.$typeEvent.'" hidden="hidden"/>';
    echo '<input type="number" name="nombre" value="'.$nombre.'" hidden="hidden"/>';
    
    //variable pour afficher le nombre d'input
    $i = 0;

    //tant que i<nombre d'input a mettre
    while ($i < $nombre) {
        //input de sous-titre
        echo '<input type="text" name="sous-titre'.$i.'"/>';
        //input de texte descriptif
        echo '<input type="text" name="description'.$i.'"/>';
    }
     
    ?>
    
    <button type="submit">Ajouter</button>
</form>

<?php include ('footer.php') ?>