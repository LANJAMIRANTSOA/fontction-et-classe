<?php
class Personne {

    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function presenter() {
        return "Je m'appelle {$this->nom} {$this->prenom}.";
    }
}

$personne1 = new Personne("Lanja", "Mirantsoa");
echo $personne1->presenter(); 