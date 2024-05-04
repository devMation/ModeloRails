<?php

require '../display/trait.php';


foreach ($articles as $article) {
    echo
    "<div class='card d-flex ' style='width: 18rem;'>
      <img src=" . $article['image'] . " class='card-img-top'>
      <div class='card-body'>
        <h5 class='card-title'> " . $article['nom'] . " </h5>
        <p class='card-text'> " . $article['description'] . "</p>
        <p class='card-text'> " . $article['prix'] . "</p>
        <a href='../update/update.php?id={$article['id']}' class='btn btn-primary'>Update</a>
        <a href='../delete/delete.php?id={$article['id']}' class='btn btn-primary'>Delete</a>
        </div>
        </div>";
}