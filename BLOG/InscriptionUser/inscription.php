<?php
require '../connect_database/connect.php';

require '../Boostrap/boostrap.php';
require '../Boostrap/headerNav.php';


// if (isset($_POST['ok'])) {
//     $pseudo = $_POST['pseudo'];
//     // var_dump($pseudo);
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Préparation de la requête d'insertion
//     $requete = $conn->prepare("INSERT INTO inscription_user (pseudo, email, password) VALUES ( ?, ?, ?)");

//     // Exécution de la requête avec les valeurs en paramètres
//     // sha1 -> jencripe mon mot de passe
//     $requete->execute([$pseudo, $email, sha1($password)]);
//     // $response = $requete->fetchAll(PDO::FETCH_ASSOC);

//     // var_dump($response);
//     $message =  "Vous etes inscrie";
// }


if (isset($_POST['ok'])) {

    // e
    if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = htmlspecialchars($_POST['password']);
        $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);

        if ($_POST['password'] != $_POST['passwordConfirm']) {
            $messPassword =  "Veuillez sisir les meme mots de passe";
            die(header('location: ../InscriptionUser/inscription.php'));
        }
        if (strlen($_POST['password'] < 7)) {
            echo "Votre mots de passe est trop court.";
        } elseif (strlen($_POST['pseudo']) > 30) {
            echo "<p class='text-white'>Votre pseudo est trop long</p>";
        } elseif (strlen($_POST['pseudo'] < 5)) {
            echo "<p class='text-white'>Votre pseudo est trop court</p>";
        } else {
            $testEmail = $conn->prepare("SELECT * FROM inscription_user where email = ?");
            $testEmail->execute(array($email));


            $controlEmail = $testEmail->rowCount();
            if ($controlEmail == 0) {
                $insert = $conn->prepare("INSERT INTO inscription_user (pseudo, email, password) VALUE(?, ?, ?)");
                // changer le sha1
                $insert->execute(array($pseudo, $email, $password));
                $message = "Votre compte a bien été crée";
            } else {
                $existCompte =  "Cette adresse a été utilisée ou existe déja";
            }
        }
    }
}



?>

<head>
    <link rel="stylesheet" href="../css/inscription.css">
</head>

<body>
    <!-- //class='text-center text-white text-uppercase -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if (!empty($messPassword)) {
                    echo "<p class='text-white text-center bg-success p-3'>$messPassword</p>";
                }
                ?>

                <div class="form_Inscription">
                    <?php if (isset($existCompte)) {
                        echo "<p class='text-center text-white bg-danger p-3'>$existCompte</p>";
                    } ?>
                    <h2 class="text-center mb-4">
                        Inscription au
                        guichet de la
                        vapeur
                    </h2>
                    <form method="POST" id="form_Inscription">

                        <div class=" form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" id="pseudo"
                                placeholder="Entrez votre pseudo" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Votre email Cheminos</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Entrez Votre email" required>
                        </div>
                        <div class="form-group">
                            <label for="Password"> Mot de passe</label>
                            <input type="text" class="form-control" name="password" id="password"
                                placeholder="Mot de passe" required>

                        </div>
                        <div class="form-group">
                            <label for="Password"> Confirmer Mot de passe</label>
                            <input type="text" class="form-control" name="passwordConfirm" id="passwordConfirm"
                                placeholder="Mot de passe" required>

                        </div>
                        <input type="submit" name="ok" value="Prochain quai " class="w-100 mx-auto m-3" require>
                        <?php if (isset($message)) {


                            echo "<p class='text-white text-center bg-success p-3'>$message</p> <a class='text-center ' href='../CompteClient/connexion.php'>Connecter Vous</a> ";
                            $page;
                        }



                        ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php require '../Boostrap/footerAccueil.php' ?>
    <script src="../InscriptionUser/inscripYoupi.js">

    </script>
</body>