<?php
  class Ville {

   private string $nom;
   private string $departement;

   function getNom () {
      return $this->nom;
   }

   function setNom ($nom) {
      $this->nom = $nom;
   }

   function getDepartement () {
      return $this->departement;
   }

   function setDepartement ($departement) {
       $this->departement = $departement;
   }

  }
   
?>
