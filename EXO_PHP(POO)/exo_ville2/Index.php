<?php
   include("Ville.php");
   $tana = new Ville("TANA", "ankatso");
   echo "Ville " . $tana->getNom () . " et département " . $tana->getDepartement ();
?>
