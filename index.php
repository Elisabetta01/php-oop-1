<!-- Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
 -->

<?php

class Movie {
     public $titolo;
     public $generi;
     public $durata;
 
     public function __construct($_titolo, Generi $_generi, $_durata) {
         $this->titolo = $_titolo;
         $this->generi = $_generi;
         $this->durata = $_durata;
     }
 
     public function playMovie() {
          echo "Play " . $this->titolo . ". Genere: " . $this->generi->genere1 . ", " . $this->generi->genere2 . ", " . $this->generi->genere3 . ". Durata: " . $this->durata . "<br>";
      }
 }
 
 class Generi {
     public $genere1;
     public $genere2;
     public $genere3;
 
     public function __construct($_genere1, $_genere2, $_genere3) {
         $this->genere1 = $_genere1;
         $this->genere2 = $_genere2;
         $this->genere3 = $_genere3;
     }
 }
 
 $avatar = new Movie('Avatar', new Generi('fantascienza', 'azione', 'avventura'), '162 min');
 $killBill1 = new Movie('Kill Bill: volume 1', new Generi('azione', 'grottesco', 'thriller'), '111 min');
 
 $avatar->playMovie();
 $killBill1->playMovie();

?>
