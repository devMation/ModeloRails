<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produit</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../display/style.css">
</head>

<body>

  <?php
  require '../display/trait.php';
  require '../Boostrap/boostrap.php';
  require '../Boostrap/paramHeader.php';
  ?>

  <div id="container" class="flex-wrap">
    <?php
    foreach ($articles as $article) {
      echo "
        <div class='card shadow p-3 m-5 bg-body-tertiary rounded ' style='width: 18rem;'>
            <img src='" . $article['image'] . "' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>" . $article['nom'] . "</h5>
                <p class='card-text'>" . $article['description'] . "</p>
                <p class='card-text'>" . $article['prix'] . "</p>
                <a href='../update/update.php?id={$article['id']}' class='btn btn-primary'>Update</a>
                <a href='../delete/delete.php?id={$article['id']}' class='btn btn-primary'>Delete</a>
            </div>
        </div>";
    }
    ?>
  </div>

</body>

</html>