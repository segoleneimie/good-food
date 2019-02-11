<?php include('header.php');?>
        
<!--    contenant général de la page-->
    <section class="reserv">
<!--    partie coordonnées-->
        <article class="contact">
            <h1> Où sommes nous ?</h1>
            <p> xx, __________ <br/> 35xxx, _____</p>
            <div class="mail">
            <img id=img-mail src="../images/enveloppe_mail.png" alt="icone d'enveloppe"/>
            <p> contact@goodfood.fr</p>
            </div>
        </article>
<!--    partie calendrier / disponibilité-->
        <article class="calendrier">
            <h1> Disponibilités</h1>
            <img id=calendrier alt="calendrier" src="../images/reservations/calendrier.png"/>
        </article>

<!--    encart de réservation / formulaire-->
        <article class="reservForm">
            <h1>Réservation </h1>
            <form method="post" action="traitement-contact.php">
                <input type="text" id="nom" name="nom" placeholder="Nom"/>
                <input type="text" id = "prenom" name="prenom" placeholder="Prenom"/>
                <input type="email" id ="mail" name= "mail" placeholder="Mail"/>

    <!--            liste déroulante d'évènement-->
                <select name="evenement" id="evenement">
                    <option value="empty" disabled selected>type d'évènement</option>
                    <option value="traiteur">Traiteur</option>
                    <option value="atelier">Atelier</option>
                </select>

                <input type="date" id="date" name="date"/>

    <!--            texte libre pour les précisions sur la réservation-->
                <textarea id="precisions" name="precisions" placeholder="Pour les réservations traiteur merci de préciser ici: le nombre de convives dont le nombre d'enfants les éventuelles contraintes alimentaires et le lieu"></textarea>
    <!--                Bouton réserver                 -->
                <button id="btn-reserv" type="submit">Réserver !</button>
            </form>
            
        </article>
</section>
        
<?php include('footer.php'); ?>