$tab = array("red", "blue", "green", "yellow");


foreach ($tab as $iter) {
    if($iter== "blue" ) continue; // si ses == continue
    if ($iter == "red") continue; // si ses == continue
    if ($iter == "yellow") break; // si ses == stop
    echo "$iter <br>";
}



