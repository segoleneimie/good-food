<?php session_start() ?>
<?php include('header.php');?>
        
<!-- barre de nav secondaire -->
        <nav class="navSecondaire">
        
            <a class="b" href="#entree">Entrée</a>
            <a class="b" href="#plat">Plats</a>
            <a class="b" href="#dessert">Dessert</a>
        
        </nav>
        
<!-- Contenu, tout dans une div -->
        
        <content>
            <article>
            
                <p class="texte">Aviez-vous imaginé un jour de rencontrer un grand Chef pour créer, avec lui, des SPAGHETTI ALLA SCAPARA dans l’ambiance d’une grande cuisine, dans l’intimité de la brigade ?</p>
                <p class="texte">
Vous réservez un carton d’invitation valable 1 an et/ou choisissez votre Chef et votre menu, selon affinités, sur notre calendrier évolutif. Notre Chef vous reçoit le matin autour d’un café (9h15-15h00) afin de réaliser ensemble le programme annoncé (jusqu’à 12 personnes). Vous serez accompagné, durant cette journée, d’un Maître d’hôtel et d’un commis de cuisine. Le principe des Cours de cuisine thématiques « techniques et produits » est de créer une rencontre très privilégiée et exclusive avec le Chef, en orientant la journée sur la création d’un menu de dégustation, autour d'un thème annoncé. 
                </p>
                
            </article>
        
        <!-------------------------------------->
        <!--------------- ENTREE --------------->
        <!--------------------------------------> 
            <article>
                <h1 id="entree">Entrée</h1>
                
                <?php

                if (($entree = fopen("../../csv/plats/entree.csv", "r")) != FALSE) {
                    //Tant que ça fait -2500 caractères et termes séparés par ,   

                    while (($dataE = fgetcsv($entree, 2500, ",")) != FALSE) {
                        $num = count($dataE);//compte le nombre de colonnes

                        for ($i = 0; $i < $num; $i++) {
                            
                            switch ($i) {
                                //titre
                                case 0:
                                    echo  "<h2>".$dataE[$i]."</h2>";
                                    break;
                                //image
                                case 1:
                                    echo "<img src='../../images/plats/".$dataE[$i]."'/>";
                                    break;
                                //description
                                case 2:
                                    echo "<p class='texte'>".$dataE[$i]."</p>";
                                    break;

                                    }
                        echo "";
                    }
                }
                }

                ?>
            
                <!---------------------------->
                <!------- AJOUT ENTREE ------->
                <!---------------------------->
                <form method="post" action="traitement-entree.php" enctype="multipart/form-data">
                    <label>Nom du plat : 
                       <input type="text" name="nom"> 
                    </label>
                    <label>Image : 
                       <input type="file" name="image">
                    </label>
                    <label>Description : 
                       <input type="textarea" name="description">
                    </label>
                    
                    <button type="submit">Ajouter</button>
                </form>
            </article>
            
        <!-------------------------------------->
        <!---------------  PLATS  -------------->
        <!-------------------------------------->
            
            <article>
                <h1 id="plat">Plats</h1>

                <?php

                if (($plats = fopen("../../csv/plats/plats.csv", "r")) != FALSE) {
                    //Tant que ça fait -2500 caractères et termes séparés par ,   

                    while (($dataP = fgetcsv($plats, 2500, ",")) != FALSE) {
                        $num = count($dataP);//compte le nombre de colonnes

                        for ($i = 0; $i < $num; $i++) {
                            
                            switch ($i) {
                                //titre
                                case 0:
                                    echo  "<h2>".$dataP[$i]."</h2>";
                                    break;
                                //image
                                case 1:
                                    echo "<img src='../../images/plats/".$dataP[$i]."'/>";
                                    break;
                                //description
                                case 2:
                                    echo "<p class='texte'>".$dataP[$i]."</p>";
                                    break;

                                    }
                        echo "";
                    }
                }
                }

                ?>
            
                <!---------------------------->
                <!-------  AJOUT PLAT  ------->
                <!---------------------------->
                <form method="post" action="traitement-plats.php" enctype="multipart/form-data">
                    <label>Nom du plat : 
                       <input type="text" name="nomPlat"> 
                    </label>
                    <label>Image : 
                       <input type="file" name="imagePlat">
                    </label>
                    <label>Description : 
                       <input type="textarea" name="descriptionPlat">
                    </label>
                    
                    <button type="submit">Ajouter</button>
                </form>
            </article>
            
            
        <!-------------------------------------->
        <!--------------- DESSERT -------------->
        <!-------------------------------------->
            <article>
                <h1 id="dessert">Desserts</h1>

                <?php

                if (($dessert = fopen("../../csv/plats/dessert.csv", "r")) != FALSE) {
                    //Tant que ça fait -2500 caractères et termes séparés par ,   

                    while (($dataD = fgetcsv($dessert, 2500, ",")) != FALSE) {
                        $num = count($dataD);//compte le nombre de colonnes

                        for ($i = 0; $i < $num; $i++) {
                            
                            switch ($i) {
                                //titre
                                case 0:
                                    echo  "<h2>".$dataD[$i]."</h2>";
                                    break;
                                //image
                                case 1:
                                    echo "<img src='../../images/plats/".$dataD[$i]."'/>";
                                    break;
                                //description
                                case 2:
                                    echo "<p class='texte'>".$dataD[$i]."</p>";
                                    break;

                                    }
                        echo "";
                    }
                }
                }

                ?>
            
                <!---------------------------->
                <!------- AJOUT DESSERT ------>
                <!---------------------------->
                <form method="post" action="traitement-dessert.php" enctype="multipart/form-data">
                    <label>Nom du plat : 
                       <input type="text" name="nomDessert"> 
                    </label>
                    <label>Image : 
                       <input type="file" name="imageDessert">
                    </label>
                    <label>Description : 
                       <input type="textarea" name="descriptionDessert">
                    </label>
                    
                    <button type="submit">Ajouter</button>
                </form>
            </article>
            
        
        </content>
        
<?php include ('footer.php') ?>