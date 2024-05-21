<?php
require("personne.php");
$personnes = array (
   $personne1 = new Personne("Rakoto", "kely", "01-mai-2003"),
   $personne2 = new Employe("Rakoto2", "kely2", "01-mai-2003","4000"),
   $personne3 = new Employe("Rakoto3", "kely4", "01-mai-2003","4000"),
   $personne4 = new Employe("Rakoto5", "kely5", "01-mai-2003","4000"),
   $personne5 = new Employe("Rakoto6", "kely6", "01-mai-2003","4000")
);

foreach ($personnes as $pr) {
   echo $pr->getNom() . " " . $pr->getPrenom() . "  " .$pr->getDate_naissance() . " " . $pr->getNom() ."<br>";
}

?>

