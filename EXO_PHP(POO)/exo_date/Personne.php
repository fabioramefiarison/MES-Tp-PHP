<?php

 class Personne {
         //les proprétés
         private $nom;
         private $prenom;

    //constructeurs
   function __construct ($nom, $prenom) {
      $this->nom = $nom;
      $this->prenom = $prenom;
   }

   function getNom (){
      return $this->nom;
   }
   function getPrenom (){
      return $this->prenom;
   }

   public function Age($date_naissance) {
      $datcurrent_naissance = date_create($date_naissance);
      $current_date = date_create(date("Y-m-d"));
      $Age = date_diff($datcurrent_naissance , $current_date);
      return $Age->format("%Y");
    }
 }

 class Etudiant extends Personne {
   private $note;

   function __construct($nom, $prenom, $note){
      parent::__construct($nom, $prenom);
      $this->note = $note;
   }

   function CalculMoyenne () {
      $moy = array_sum($this->note) / count($this->note);
      return $moy;
   }

   function AfficherMention () {
      $moy = array_sum($this->note) / count($this->note);
      if ($moy < 10 ) return "pas de mention";
      if ($moy >= 10 && $moy <= 12) return "mention passable";
      if ($moy > 12 && $moy <= 14) return "Félicitation!, mention assez bien";
      if ($moy > 14 && $moy <= 16) return "Bravo!, mention bien";
      if ($moy > 16) return "Tableau d'honneur!, mention très bien";
   }
}

?>