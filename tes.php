<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require './BLOG/connect_database/connect.php';

if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) 
&& !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = htmlspecialchars($_POST['password']);
        $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);

if ($password != $passwordConfirm) {
   
}
    
}


if (empty($_POST['pass'] && empty($_GET['error']))) {
    # code...
}


?>

<body>
    <form action="" method="POST">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="passwordConfirm">
        <input type="submit" name="ok">

    </form>




</body>

</html>