<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie{
     public $titolo;
     public $genere;
     public $durata;

     function __construct($_titolo, $_genere, $_durata){
          $this->titolo = $_titolo;
          $this->genere = $_genere;
          $this->durata = $_durata;
     }

     public function playMovie(){
          echo "Play $this->titolo , genere: $this->genere , durata: $this->durata <br>";
     }
}

$avatar = new Movie('Avatar', 'fantascienza, azione, avventura', '162 min');
$avatar->playMovie();

$killBill1 = new Movie('Kill Bill: volume 1', 'azione, grottesco, thriller', '111 min');
$killBill1->playMovie();

?>
