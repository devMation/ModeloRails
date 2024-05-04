<?php
require '../Boostrap/boostrap.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Ajout</title>
</head>

<style>
    body {
        background: url(../pictures/locomotive141r420_modelisme.jpeg) center/cover fixed;
    }


    textarea,
    input {
        resize: none;
        opacity: 0.9;
        color: black;
    }

    .encadrement {
        background-color: white;
        width: 50%;
        opacity: 0.8;
        border: 1px solid black;
        border-radius: 20px;
        margin: 4% auto;
    }
</style>


<body>
    <?= require '../Boostrap/header.php' ?>
    <div class="encadrement">
        <form action="./trait.php" method="post" class="d-flex flex-column mb-2 w-50 mx-auto " style="margin-top: 6%;">
            <h1 class="text-center">Ajouter un article</h1>

            <label for=" nomArticle">Nom de l'article</label>
            <input type="text" name="nom" id="nomArticle">
            <label for="description">Description de l'article</label>
            <textarea name="description" id="description" rows="8"></textarea>
            <label for="prix">Prix € TTC</label>
            <input type="number" name="prix" id="prix" class="w-25">
            <label for="picture">Image</label>
            <input type="text" name="image" id="picture">
            <input type="submit" value="Ajouter" class="w-75 mx-auto m-4">
        </form>
    </div>
    </div>
</body>

</html>