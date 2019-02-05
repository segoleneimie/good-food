<<?php include('header.php') ?>
<!-- filtres -->
        <div class="filtre">
        <form  method="post" action="#">
            <select name="filtre" id="filtre">
                <option value="empty" disabled selected>filtre</option>
                    <optgroup label="Plats">
                        <option value="entree">Entrée</option>
                        <option value="plats">Plats</option>
                        <option value="dessert">Dessert</option>
                    </optgroup> 
                    <optgroup label="activite">
                        <option value="salon">Salon</option>
                        <option value="atelier">Atelier</option>
                        <option value="repas">Repas</option>
                    </optgroup>
                    <optgroup label="actualite">
                        <option value="salon">Salon</option>
                        <option value="atelier">Atelier</option>
                        <option value="repas">Repas</option>
                    </optgroup>
                <option value="actualite">Actualité</option>
            </select>
        </form>
        </div>
<!--    section contenant les images -->
        <section class="gal">
            <img src="../images/uniquement_galerie/oiseauPainDemi.jpg">
            <img src="../images/uniquement_galerie/omelette.png">
            <img src="../images/Plats/Aiglefin-en-cro%C3%BBte-de-pomme-de-terre.jpg">
            <img src="../images/Plats/curry-de-poulet-au-lait-coco.jpg">
            <img src="../images/Plats/filet-porc-salade-verte.jpg">
            <img src="../images/Plats/gratin-lasagnes-bolo.jpg">
            <img src="../images/Plats/pomme-de-terre%20farcie-au-brocoli-et-aux-lardons.jpg">
            <img src="../images/Plats/salade-p%C3%AAches-jambon-de-parme-et-mozzarella.jpg">
            <img src="../images/Plats/saute-de-dinde-concombre-menthe-et-gingembre.jpg">
            <img src="../images/Plats/spaghetti-alla-scapara.jpg">
            <img src="../images/Activites/Chamallow.png">
            <img src="../images/Activites/Essaie%20encore.png">
            <img src="../images/Activites/leon-fruta.jpg">
            <img src="../images/Activites/mickey.jpg">
            <img src="../images/Activites/presentation.jpg">
            <img src="../images/Activites/Pressez%20vous.png">
            <img src="../images/Activites/salon.jpg">
            <img src="../images/Actualites/atelierCuli.jpg">
            <img src="../images/Actualites/clown.jpg">
            <img src="../images/Actualites/nounours.jpg"> 
        </section>
<!-- footer -->
<?php include('footer.php') ?>