<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Nav</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="colorBacgorundNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../pictures/icons8-locomotive-emoji-96.png" class="w-100" alt="logo-site"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="p-4">TCHOU-TCHOU</h1>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0b text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Accueil/accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
            <span>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="../panier/panier.php">Panier</a></li>
                    <li class="nav-item"><a class="nav-link" href="../CompteClient/connexion.php">Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="compte">
                            <script>
                                compte.addEventListener('click', (e) => {
                                    alert("Vous avez pas accée")
                                })
                            </script>Admin
                        </a>

                    </li>
                    <li class="nav-item"><a class="nav-link" href="../blogFeroPassion/blog.php">Blog</a></li>
                </ul>


            </span>
        </div>
        </div>
    </nav>

</html>
</body>