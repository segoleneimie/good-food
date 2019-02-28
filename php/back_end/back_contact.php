<?php $page = "back_contacts"; ?>
<?php include('header.php');?>
        
<!--    contenant général de la page-->
    <section class="reserv">
<!--    partie coordonnées-->
          
            <?php

            if (($contact = fopen("../../csv/contact.csv", "r")) != FALSE) {
                    //Tant que ça fait -1000 caractères et termes séparés par ,
                $j = 0;    
                
        while (($data = fgetcsv($contact, 2500, ",")) != FALSE) {
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
                            echo "<th>Type d'événement</th>";
                            echo "<th>Date</th>";
                            echo "<th class='precisions'>Précision</th>";
                    
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

                            case 3: //type d'event
                                echo "<td>"; //nouvelle cellule
                                break;

                            case 4: //date
                                echo "<td>";
                                break; //nouvelle cellule

                            case 5: //précisions
                                echo "<td class='precisions'>";
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