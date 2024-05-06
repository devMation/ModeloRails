<?php
require '../connect_database/connect.php';

require '../Boostrap/boostrap.php';
require '../Boostrap/headerNav.php';


if (isset($_POST['ok'])) {
    $pseudo = $_POST['pseudo'];
    // var_dump($pseudo);
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparation de la requête d'insertion
    $requete = $conn->prepare("INSERT INTO inscription_user (pseudo, email, password) VALUES ( ?, ?, ?)");

    // Exécution de la requête avec les valeurs en paramètres
    // sha1 -> jencripe mon mot de passe
    $requete->execute([$pseudo, $email, sha1($password)]);
    // $response = $requete->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($response);
    echo "Vous etes inscrie";
}

?>

<head>
    <link rel="stylesheet" href="../css/inscription.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <script>

                </script>
                <div class="form_Inscription">
                    <h2 class="text-center mb-4">Inscription au guichet de la vapeur</h2>
                    <form method="POST" id="form_Inscription">

                        <div class=" form-group">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" id="pseudo"
                                placeholder="Entrez votre pseudo">
                        </div>

                        <div class="form-group">
                            <label for="email">Votre email Cheminos</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Entrez Votre email">
                        </div>
                        <div class="form-group">
                            <label for="Password"> Mot de passe</label>
                            <input type="text" class="form-control" name="password" id="Password"
                                placeholder="Mot de passe">
                        </div>

                        <input type="submit" name="ok" value="Prochain quai " class="w-100 mx-auto m-3">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require '../Boostrap/footerAccueil.php' ?>
</body>