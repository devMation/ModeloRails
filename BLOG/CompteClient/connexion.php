<?php
require '../Boostrap/boostrap.php';
require '../Boostrap/headerNav.php';
require '../connect_database/connect.php';


if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = htmlspecialchars($_POST['password']);

    //crypte le password

    $password = "aq1" . sha1($password . "17874à") . "548";

    $req = $conn->prepare("SELECT * FROM inscription_user where email = ?");
    $req->execute(array($email));



    while ($user = $req->fetch()) {
        if ($password == $user['password']) {
            header("location: ../CompteClient/connexion.php?succees=1");
        }
    }
}

header("location: ../CompteClient/connexion.php?error=1")





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
                        <?php
                            if(isset($_GET['error'])) {
                                echo "<p class='text-white text-center bg-warning p-3'>On peut pas vous identifier</p>";
                            }else if(isset($_GET['success'])) {
                                echo "<p class='text-white text-center bg-success p-3'>Vous etes mtn connect</p>";
                            }
                        ?>
                        <form method="post">
                            <div class="form-group">
                                <label for="email">Adresse Email</label>
                                <input type="email" class="form-control" name="email" id=" email"
                                    aria-describedby="emailHelp" placeholder="Entrez votre email" required>
                                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre
                                    adresse email avec personne d'autre.</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Mot de passe" required>
                            </div>
                            <label for="connect">
                                <input type="checkbox" name="connect" id="connect" checked> connexion automatique
                            </label>

                            <div class="form-check">
                                <a href="../InscriptionUser/inscription.php">Vous avez pas de
                                    compte
                                    crée en
                                    un
                                    ?</a>
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