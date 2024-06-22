<?php

require '../connect_database/connect.php';
var_dump($_POST);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['image']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['quantity'])) {
        $image = $_POST['image'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $req = $conn->prepare("INSERT INTO panier (image, name, price, quantity) VALUES (?, ?, ?, ?)");
        $req->execute([$image, $name, $price, $quantity]);
        header('Location: ../AjoutPanier/panier.php');
        
    } else {
        echo 'Veuillez remplir tous les champs.';
    }
}