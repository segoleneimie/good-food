<?php $page = "back_recrutement"; ?>
<?php include('header.php');?>
        
<!--    contenant général de la page-->
    <section class="reserv">
        <h1>Candidats</h1>
<!--    partie coordonnées-->
          
            <?php

            if (($candidat = fopen("../../csv/candidat.csv", "r")) != FALSE) {
                    //Tant que ça fait -1000 caractères et termes séparés par ,
                $j = 0;    
                
        while (($data = fgetcsv($candidat, 2500, ",")) != FALSE) {
            $num = count($data);//compte le nombre de colonnes
            
                    //si c'est la premiere fois
                    if ($j==0) {
                    //création d'un tableau
                    echo "<table>";
                        //nouvelle colonne
                        echo "<tr>";
                            //on met le nom des colonnes
                            echo "<th>Nom</th>";
                            echo "<th>Prénom</th>";
                            echo "<th>Mail</th>";
                            echo "<th>CV</th>";
                            echo "<th>Motivations</th>";
                    
                        //fin colonne et début d'une autre
                        echo "</tr>";
                    }
            
                    echo "<tr>";
            
                    //pour chaque donnée par ligne de csv
                    for ($i = 0; $i < $num; $i++) {

                        switch ($i) {

                            case 0: //nom
                                echo "<td>"; //nouvelle cellule
                                break;

                            case 1: //prenom
                                echo "<td>"; //nouvelle cellule
                                break;

                            case 2: //mail
                                echo "<td>"; //nouvelle cellule
                                break;
                            case 3: //cv
                                echo "<td>"; //nouvelle cellule
                                break;

                            case 3: //motivations
                                echo "<td>";
                                break;//nouvelle cellule
                        }

                        //donnée postée puis fin de cellue
                        echo $data[$i]."</td>";

                        //On incrémente pour ne pas réafficher le nom des colonnes
                        $j++;

                    }
                //fin de la colonne
                echo "</tr>";
 
        }
    //fin du tableau
    echo "</table>";
    }

?>

</section>
<!--    contenant général de la page-->
    <section class="reserv">
        <h1>Collaborateurs</h1>
<!--    partie coordonnées-->
          
            <?php

            if (($collab = fopen("../../csv/collaborateur.csv", "r")) != FALSE) {
                    //Tant que ça fait -1000 caractères et termes séparés par ,
                $j = 0;    
                
        while (($data = fgetcsv($collab, 2500, ",")) != FALSE) {
            $num = count($data);//compte le nombre de colonnes
            
                    //si c'est la premiere fois
                    if ($j==0) {
                    //création d'un tableau
                    echo "<table>";
                        //nouvelle colonne
                        echo "<tr>";
                            //on met le nom des colonnes
                            echo "<th>Nom</th>";
                            echo "<th>Prénom</th>";
                            echo "<th>Mail</th>";
                            echo "<th class='projet'>Projet</th>";
                    
                        //fin colonne et début d'une autre
                        echo "</tr>";
                    }
            
                    echo "<tr>";
            
                    //pour chaque donnée par ligne de csv
                    for ($i = 0; $i < $num; $i++) {

                        switch ($i) {

                            case 0: //nom
                                echo "<td>"; //nouvelle cellule
                                break;

                            case 1: //prenom
                                echo "<td>"; //nouvelle cellule
                                break;

                            case 2: //mail
                                echo "<td>"; //nouvelle cellule
                                break;


                            case 5: //projet
                                echo "<td class='projet'>";
                                break;//nouvelle cellule
                        }

                        //donnée postée puis fin de cellue
                        echo $data[$i]."</td>";

                        //On incrémente pour ne pas réafficher le nom des colonnes
                        $j++;

                    }
                //fin de la colonne
                echo "</tr>";
 
        }
    //fin du tableau
    echo "</table>";
    }

?>

</section>
        
<?php include('footer.php'); ?>