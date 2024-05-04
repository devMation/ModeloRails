<?php
require '../connect_database/connect.php';
require '../Boostrap/boostrap.php';
require '../display/trait.php';
// je stock mais donner dans des variables

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // $id = $_POST['id'];
  $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
  $description = isset($_POST['description']) ? $_POST['description'] : '';
  $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
  $image = isset($_POST['image']) ? $_POST['image'] : '';
}

// Préparation de la requête d'insertion
$prep = $conn->prepare("INSERT INTO produit (nom, description, prix, image) VALUES (?, ?, ?, ?)");

// Exécution de la requête avec les valeurs en paramètres
$prep->execute([$nom, $description, $prix, $image]);

// -------------------------------------------------------------------------


// affichage de mais article que jai ajouter et get de ma database
// foreach ($articles as $article) {
//   echo
//   "<div class='card d-flex ' style='width: 18rem;'>
//     <img src=" . $article['image'] . " class='card-img-top'>
//     <div class='card-body'>
//       <h5 class='card-title'> " . $article['nom'] . " </h5>
//       <p class='card-text'> " . $article['description'] . "</p>
//       <p class='card-text'> " . $article['prix'] . "</p>
//       <a href='../update/update.php?id={$article['id']}' class='btn btn-primary'>Update</a>
//       <a href='../delete/delete.php?id={$article['id']}' class='btn btn-primary'>Delete</a>
//       </div>
//       </div>";
// }












// je les recupere bien
// var_dump($nom);
// var_dump($description);
// var_dump($prix);
// var_dump($image);