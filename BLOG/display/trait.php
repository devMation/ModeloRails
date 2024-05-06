<?php
require '../connect_database/connect.php';
require '../Boostrap/boostrap.php';




// // Vérifie si la requête est de type GET
// if ($_SERVER['REQUEST_METHOD'] == "GET") {
//   // Vérifie si les clés existent dans $_GET avant de les utiliser
//   // $id = isset($_GET['id']) ? $_GET['id'] : '';
//   $nom = isset($_GET['nom']) ? $_GET['nom'] : '';
//   $description = isset($_GET['description']) ? $_GET['description'] : '';
//   $prix = isset($_GET['prix']) ? $_GET['prix'] : '';
//   $image = isset($_GET['image']) ? $_GET['image'] : '';
// }



// Exécute la requête SQL
$reqSql = "SELECT * FROM produit";
$exe = $conn->query($reqSql);



// Récupère les résultats de la requête dans un tableau
$articles = $exe->fetchAll();