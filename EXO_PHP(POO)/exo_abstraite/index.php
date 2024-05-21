<?php
   require('Vehicule.php');
   $voitures1 = new Camion(2012, "Fiat", 50000);
   echo $voitures1->getMatricule();
   $voitures2 = new Voiture(2013, "Audi", 100000);
   echo $voitures2->getMatricule();