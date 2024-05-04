class Car
{

    /**
     * Propriété
     *
     * 
     */
    public $color; 
    public $model;

    public function __construct($couleur, $modele)
    {
        $this->color = $couleur;
        $this->model = $modele;
    }
}

$noubvelleVoiture = new Car("blue", "Peugeot");

foreach ($noubvelleVoiture as $bagnole => $valeur) {
    echo "$bagnole :  $valeur <br>";
}