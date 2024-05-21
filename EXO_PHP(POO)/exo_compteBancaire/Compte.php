<?php
   class Compte {

      //les deux attributs
      private $somme;
      private $taux;

      //constructeur
      function __construct ($s, $t) {
         $this->somme = $s;
         $this->taux = $t;
      }

      
      //méthodes qui affiche la somme
      function affiche ($somme, $taux) {
         return "compte | Somme: " . $somme . " | " . "taux: " . $taux . "%";
      }

      function get_somme () {
         return $this->somme;
      }

      function get_taux () {
         return $this->taux;
      }

      //méthode qui faire un dépot
      function depot ($x) {
         return "nouveau somme : ". $this->somme + $x . "<br>";
      }
   
      //méthode retrait 
      function retrait($x) {
        $nouveau_somme = $this->somme - $x;
        if ($nouveau_somme < 0) {
         $nouveau_somme = $this->somme;
         return "opération annulée ! votre somme reste: " . $this->somme . "<br>";
        }
        else {
         return "votre nouveau somme: " .$nouveau_somme . "<br>";
        }
      }
   }
?>