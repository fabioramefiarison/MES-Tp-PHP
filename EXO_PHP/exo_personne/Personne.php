<?php
 class Personne  {
      //propriétés
      private  $nom;
      private  $prenom;
      private  $adresse;

      //Constructeur
      function __construct ($nom, $prenom, $adresse) {
         $this->nom = $nom;
         $this->prenom = $prenom;
         $this->adresse = $adresse;
      }

      //Destructeur
      function __destruct () {
         echo "nom :  {$this->nom} </br> prenom : {$this->prenom}  </br> adresse : {$this->adresse}";
      }

   }
?>