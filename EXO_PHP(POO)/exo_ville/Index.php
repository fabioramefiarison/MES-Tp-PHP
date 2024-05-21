<?php
   include("Ville.php");
   $tana = new Ville();
   $tana->setNom("Toamasina");
   $tana->setDepartement("Mangarivotra");
   echo "nom de ville " . $tana->getNom () . " et département " . $tana->getDepartement ();
?>
