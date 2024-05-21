<?php
class Personne {
   //les attributs
   private $nom;
   private $prenom;
   private $date_naissance;

   //constructeur
   function __construct ($nom, $prenom, $date_naissance) {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->date_naisance = $date_naissance;
   }

   function getNom () {
      return $this->nom;
   }

   function getPrenom () {
      return $this->prenom;
   }

   function getDate_naissance () {
      return $this->date_naisance;
   }
}

//classe Employée
class Employe extends Personne {
   private $salaire;
   function __construct ($nom, $prenom, $date_naissance, $salaire) {
      parent::__construct($nom, $prenom, $date_naissance);
      $this->salaire = $salaire;
   }

   function getSalaire () {
      return $this->salaire;
   }
}
?>