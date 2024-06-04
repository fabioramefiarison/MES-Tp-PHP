<?php
include("Personne.php");
 $etudiant1 = new Etudiant("Rakoto", "ndrasana", [10 , 12, 17]);
 echo "Nom: " . $etudiant1->getNom() ."<br>" . "prenom: " . $etudiant1->getPrenom() . "<br>" . "age: " . $etudiant1->Age("12-04-2001") . "<br>" . "moyenne: " .  $etudiant1->CalculMoyenne() . "<br>" ;
 echo $etudiant1->AfficherMention();