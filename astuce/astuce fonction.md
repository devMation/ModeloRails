// fonction

// simple
function prenom()
{
    echo "amine";
}

prenom();


// avec deux argument en parametre
echo "<br>";
function family($prenom, $nom)
{
    echo "Mon identité est $nom $prenom";
}


family("amine", "mechtoub");
echo "<br>";


function grand($a = 450)
{
    if ($a < 500) $a = "nul";
}


grand();


echo "<br>";


function calcul($a, $b)
{
    if ($a && $b > 200) {
        echo "propre";
        return $a * $b;
    } else {
        echo "nul";
        return  $a * $b;
    }
}


echo calcul(10, 1000);


echo "<br>";

function dd($p, $h)
{
    return $p * $h;
}

echo dd(50, 50);
echo "<br>";

function add(&$value)
{
    $value += 10;
}

$change = 100;
add($num);
echo $num;


echo "<br>";



// declare(strict_types=1);

// function add(float $a, float $b): float
// {
//     return (int)$a + $b;
// }


// echo add(1.2, 1.2);