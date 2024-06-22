<?php
// Démarre la session
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Titre</title>
    <!-- <link rel="stylesheet" href="path/to/bootstrap.css"> -->
    <!-- Assurez-vous que le chemin vers votre fichier Bootstrap est correct -->
    <style>
    .navbar-custom {
        background-color: rgba(60, 58, 58, 0.75);
        /* Couleur noire avec 75% d'opacité */
    }

    .navbar-nav img {
        width: 32px;
        /* Ajuster la taille de l'image si nécessaire */
        height: 32px;
        /* Ajuster la taille de l'image si nécessaire */
        object-fit: cover;
    }

    .navbar .navbar-nav {
        display: flex;
        align-items: center;
    }

    .navbar .navbar-nav .nav-link {
        margin-left: 15px;
        /* Espacement entre les icônes si nécessaire */
        margin-right: 15px;
        /* Espacement entre les icônes si nécessaire */
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../pictures/logo-site.png" alt="logo-site">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="../Accueil/accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#product">Nos Maquettes</a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <div class="d-flex align-items-center justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../CompteClient/connexion.php">
                                <img src="../pictures/user.png" alt="Connexion">
                            </a>
                        </li>
                        <?php if (isset($_SESSION['user']) && !isset($_SESSION['admin_email'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../logout/logout.php">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="me-1 p-0" src="../pictures/deco.png" alt="Deconnexion">
                                </div>
                                <p class="m-0 p-0 text-white fw-bold">
                                    Connecté en tant que <?= $_SESSION['user']['pseudo'] ?>
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../AjoutPanier/panier.php">
                                <img src="../pictures/cadie-logo-header.png" alt="Panier">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../blogFeroPassion/commentaire.php">
                                <img src="../pictures/blog1.png" alt="Blog">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../Admin/compteAdmin.php">
                                <img src="../pictures/admin1.png" alt="Admin">
                            </a>
                        </li>
                        <?php if (isset($_SESSION['admin_email'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../logout/logout.php">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="me-1 p-0" src="../pictures/deco.png" alt="Deconnexion">
                                </div>
                                <p class="m-0 p-0 text-white fw-bold">
                                    Connecté en tant que Administrateur
                                </p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>