<?php
   //classe PARENT Vehicule
      abstract class Vehicule {
      private static $vehiculeCompte = 0;
      private $matricule;
      private $annee;
      private $modele;
      private $prix;

      function __construct ($annee, $modele, $prix) {
         $this->matricule = ++self::$vehiculeCompte;
         $this->annee = $annee;
         $this->modele = $modele;
         $this->prix = $prix;
      }

      function getMatricule () {
         return $this->matricule;
      }
      function setMatricule ($matricule) {
         $this->matricule = $matricule;
      }

      function getAnnee () {
         return $this->aneee;
      }
      function setAnnee ($annee) {
         $this->annee = $annee;
      }

      function getModele () {
         return $this->modele;
      }
      function setModele ($modele) {
         $this->modele = $modele;
      }

      function getPrix () {
         return $this->prix;
      }
      function setPrix ($prix) {
         $this->prix = $prix;
      }

      // les DEUX METHODES abstraites
      abstract public function Demarrer () ;
      abstract public function Accelerer ();

      //méthodes toString
      function toString (){
         return "$this->matricule";
      }
   }

   //classe Camion 
   class Camion extends Vehicule {
      public function Demarrer (){
         return "La voiture demarre !";
      }
      public function Accelerer (){
         return "La voiture accélere !";
      }
   }

   class Voiture extends Vehicule {
      public function Demarrer (){
         return "La voiture demarre !";
      }
      public function Accelerer (){
         return "La voiture accélere !";
      }
   }
?>