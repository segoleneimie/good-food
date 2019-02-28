<?php include ('header.php') ?>
<!-- formulaire de connexion -->
        <h1>Connexion administrateur</h1>
        <div class="log">
            <form method="post" action="traitement-login.php">
                <input type="text" id="identifiant" name="identifiant" placeholder="Identifiant" required />
                <input type="password" id = "mdp" name="mdp" placeholder="Mot de passe" required/>
                <button id="connexion">Connexion</button>
        </div>
<?php include ('footer.php') ?>