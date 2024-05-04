$a = 3;
// Tant que ma condition et vrai tu boucle;
// et quand la variable $a sera supérieur à 10 a:ors tu arrete car la condition sera false


// Instruction break

while ($a < 10) {
    // quand la boucle arrive à litération 5 il la stop;
    if ($a == 5) break;
    echo $a;
    $a++;
}


// Instruction continue

while ($a < 10) {
   $a++;
    if($a == 5) continue;
   echo $a;
}

