/* j'ai crée un tableau qui contient plusieur 
iteration dont chacune contient uen clé et une valeur*/
$identity = array("nom" => "MECHTOUB", "prenom" => "amine", "age" => 25);


/**
 * J'ai bouclé dessus j'ai demander à ma boucle 
 * tu boucle sur mon tableau $identity
 * ensuite du prend la key
 * aisni que la valeur et tu echo .
 */
foreach ($identity as $user => $human) {
    echo $user . " :  " .  $human ; 
}



--------------------------------------------------

// tabmeau simple 
$tech = array("js", "php", "c#", "c++");


/**
 * Je boucle sur mon tableau $tech
 * chaque index de mon tableau va sapeler $a
 * je fait uen condition qui me permet de tester  si $a == php et je la diffie par la suite en lui donnant une autre valeur
 * et ensuite je mais une eperluette pour modifier la valeur du tableau;
 */
foreach ($tech as &$a) {
    if ($a == "php") $a = "python";
}



// tableau clé valeur
$array1 = array("prenom" => "amine", "nom" => "mechtoub");
 
foreach ($array1 as $z => &$m) {
    // je vais vhercher ma cle a lindex 0 at ma valeur je je teste si c'est == à "amine 
    // ensuite je vais la changer en Mohamed;
    // ensuite pour finir pour changer la valeur de prenom je mais une eperluette devant $m (&$m)
   if ($z[0] && $m == "amine") $m = "Mohamed";
}


var_dump($array1);


----------------------------------------------------------------

$aar = array("red", "green", "blue", "yellow");


// dans cette boucle pas besoin deperluette
foreach ($aar as $o) :
    if($o == "green") $o = "amoine";
    echo "$o <br>";

endforeach;

