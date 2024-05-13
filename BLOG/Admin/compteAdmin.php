<?php

require '../Boostrap/boostrap.php';
require '../Boostrap/headerAdmin.php';
require '../Admin/scriptAdmin.php';

require '../connect_database/connect.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="encadrement-admin">
        <form action="../Admin/scriptAdmin.php" method="GET" class="d-flex flex-column mb-3 w-50 mx-auto ">

            <?php
            if (!empty($mess))
                echo "<p class='text-white text-center bg-success p-3'>$mess</p>  ";

            ?>
            <h1 class="text-center">Compte Admin</h1>
            <label for=" nomArticle">Email</label>
            <input type="email" name="email" id="nomArticle">
            <label for="description">Mot de passe</label>
            <input type="password" name="password" id="nomArticle">

            <input type="submit" name="valider" value="Se connecter">

            <?php
            if (!empty($ok)) {
                echo "<p class='text-white text-center bg-success p-3'>$ok</p>";
            }

            ?>

        </form>
    </div>

</html>