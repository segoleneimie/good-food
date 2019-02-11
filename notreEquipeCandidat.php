<?php include('header.php') ?>
    
    <body class="body-uni">
<!-- Header sur toutes les pages -->
        <header>
                <!-- div du bandeau au-dessus de la barre de nav-->
                <div id="haut">
                    <!--logo-->
                    <img id="logo" src="../images/logo/logo.png"/>
                    <!-- div titre + sloggan-->
                    <div id="titreSoustitre">
                        <!-- titre -->
                        <p id="titre">Goodfood</p>
                        <!-- sloggan -->
                        <p id="soustitre">Good mood</p>
                    </div>
                </div>
    <!-- Nav sur toutes les pages -->
           <nav id="navPrimaire"> 
                <a id="accueil" href="accueil.php">Accueil</a>
                <a id="plats" href="plats.php">Nos plats</a>
                <a id="activite" href="activite.php">Nos activités</a>
                <a id="actu" href="actu.php">Actualités</a>
                <a id="contact" href="contact.php">Contacts / Réservation</a>
                <a id="equipe" href="notreEquipeCandidat.php">Notre équipe / recrutement</a>
                <a id="galerie" href="galerie.php">Galerie</a>
            </nav>
        </header>
<!--        section contenant les articles de la page-->
        <section class="equipe">
<!--        partie organigramme-->
            <article class="org">
                <img id="organi" src="../images/organigramme.png" alt="organigramme">

            </article>
    <!--        formulaire candidature-->
            <article class="candidat">
<!--  pour éviter d'avoir les 2 formulaires sur la même page : création de 2 pages html identiques avec chacune le formulaire voulu donc création de liens ramenant à la page contenant le formulaire souhaité contenu dans une div pour la mise en forme-->
                <div class="lienCand"><a href="notreEquipeCandidat.php">Rejoignez-nous</a></div>
                <div ><a href="notreEquipeCollab.php"> Devenez Collaborateur </a></div>
                <form method="post" action="traitement-candidat.php" enctype="multipart/form-data">
                    <input type="text" name="nom" placeholder="Nom"/>
                    <input type="text" name="prenom" placeholder="Prenom"/>
                    <input type="email" name="email" placeholder="email"/>
                    <label for="cv"> Votre CV
                        <input type="file" name="cv" id="cv" />
                    </label>
                    <textarea id="motivations" name="motivations" placeholder="Décrivez vos motivitations"></textarea>
                    <button id="btnPostule" type="submit"> Postulez !</button>
                </form>
            </article>

        </section>
        <!-- footer -->
<?php include('footer.php') ?>