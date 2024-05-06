<?php
require '../Boostrap/boostrap.php';
require '../display/trait.php';
require '../Boostrap/headerNav.php';

?>

<head>
    <link rel="stylesheet" href="../css/banderol.css">
</head>

<!-- A voir demain animation js css-->
<script>
const banderol = document.getElementById('banderol-locomotive');
banderol.addEventListener('click', (e) => {
    console.log(e);
})
</script>

<body>
    <div class='banderol' id='banderol-locomotive'></div>
</body>
<?php

foreach ($articles as $article) {
  echo "
 
  
  <div class=''>
    <div class='card shadow p-3 mb-5 bg-body-tertiary rounded m-3' style='width: 18rem;   '>
        <img src=" . $article['image'] . " class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'> " . $article['nom'] . " </h5>
            <p class='card-text'> " . $article['description'] . "</p>
            <p class='card-text'> " . $article['prix'] . "</p>
            <a href='#' class='btn btn-primary'>Detail</a>
            <a href='#' class='btn btn-primary'>Ajouter au panier</a>
        </div>
    </div>

</div>";
}

require '../Boostrap/footerAccueil.php';


?>