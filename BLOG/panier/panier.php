<?php

require '../Boostrap/headerNav.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-4">
        <h1 class="mb-4">Article</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="card-img" alt="Produit">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nom du produit</h5>
                                <p class="card-text">Description du produit. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</p>
                                <p class="card-text">Prix : $10.00</p>
                                <div class="input-group mb-3" style="max-width: 120px;">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                    </div>
                                    <input type="text" class="form-control text-center" value="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-sm">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ajoutez d'autres cartes pour d'autres produits -->
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sous-total : $10.00</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Frais de livraison : $0.00</h6>
                        <hr>
                        <h4 class="card-title">Total à payer : $10.00</h4>
                        <button class="btn btn-primary btn-block mt-3">Payer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <h1 class="mb-4">Article</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="card-img" alt="Produit">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nom du produit</h5>
                                <p class="card-text">Description du produit. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</p>
                                <p class="card-text">Prix : $10.00</p>
                                <div class="input-group mb-3" style="max-width: 120px;">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                    </div>
                                    <input type="text" class="form-control text-center" value="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-sm">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ajoutez d'autres cartes pour d'autres produits -->
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sous-total : $10.00</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Frais de livraison : $0.00</h6>
                        <hr>
                        <h4 class="card-title">Total à payer : $10.00</h4>
                        <button class="btn btn-primary btn-block mt-3">Payer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?=

    require '../Boostrap/footerAccueil.php';
    ?>
</body>

</html>