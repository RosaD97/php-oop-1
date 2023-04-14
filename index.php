<?php

// Classe Movie
class Movie {
    public $name;
    public $genere;

    // Costruttore che applica il genere ad ogni film
    function __construct($_genere){
        $this->genere = $_genere;
    }

    // Funzione che ritorna il nome del film
    public function getName(){
        return $this->name;
    }

}

// Creo due Istanze/oggetti Film
$harryPotter = new Movie('fantasy');
$joker = new Movie('horror');
// Assegnazione nome film
$harryPotter->name = 'harryPotter';
$joker->name = 'joker';
// Richiamo un metodo
$name_movie = $joker->getName();

// Stampo i valori
var_dump($harryPotter);
var_dump($joker);
var_dump($name_movie);