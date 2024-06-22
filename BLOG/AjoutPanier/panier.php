<?php
require '../connect_database/connect.php';

require '../Boostrap/boostrap.php';

$reqSql = "SELECT * FROM panier";
$exe = $conn->query($reqSql);
$messages = $exe->fetchAll(PDO::FETCH_ASSOC);


if ($messages == null) {
    $vide =  "Votre panier et vide pour le moment";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>

    <style>
        .cart-item {
            border-bottom: 1px solid #eaeaea;
            padding: 15px 0;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php require '../AjoutPanier/delete.php' ?>

    <?php require '../Boostrap/headerNav.php' ?>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Mon Panier</h2>

        <!-- Boucle pour afficher chaque produit dans une carte Bootstrap -->
        <?php foreach ($messages as $message) : ?>


            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <img src="<?php echo $message['image']; ?>" class="card-img" alt="# ">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $message['name']; ?></h5>

                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <?php echo 'Total: €' . number_format($message['price'] * $message['quantity'], 2); ?>
                            <p class="card-text">Quantité: <?php echo $message['quantity']; ?></p>
                            <a href="../AjoutPanier/delete.php?id=<?php echo $message['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Résumé du panier -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Résumé du Panier</h4>
                        <ul class="list-group list-group-flush">
                            <?php
                            $total = 0;
                            foreach ($messages as $message) {
                                $subtotal = $message['price'] * $message['quantity'];
                                $total += $subtotal;
                                echo '<li class="list-group-item">' . htmlspecialchars($message['name']) . ': €' . number_format($subtotal, 2) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total</h4>
                        <h5 class="card-text">€<?php echo number_format($total, 2); ?></h5>
                        <a href="caisse.php" class="btn btn-success btn-lg btn-block">Passer à la caisse</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>

    <?php require '../Boostrap/footerAccueil.php' ?>
</body>

</html>