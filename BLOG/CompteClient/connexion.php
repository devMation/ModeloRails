<?php
require '../Boostrap/boostrap.php';
require '../Boostrap/headerNav.php';
 


?>

<body>
    <div class="container " style="margin: 8% auto;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Connexion au Compte
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="email">Adresse Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Entrez votre email">
                                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre
                                    adresse email avec personne d'autre.</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                            </div>
                            <div class="form-check">
                                <a href="#">Vous avez pas de compte crée en un ?</a>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Connexion</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?= require '../Boostrap/footerAccueil.php' ?>
</body>

</html>