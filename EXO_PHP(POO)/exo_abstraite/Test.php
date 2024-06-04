<?php
   require('Vehicule.php');
   class Test {
      public static function main (){
         $camion1 = new Camion(2012, "Mercedes", 50000);
         $sprinter = new Voiture(2013, "Audi", 100000);

         //echo $camion1 . "<br>";
         echo "numéro matricule : " . $camion1->getMatricule() . "<br>";
         echo $camion1->Demarrer() . "<br>";
         echo $camion1->Accelerer() . "<br>";
         echo "<br>";
         //echo $sprinter . "<br>";
         echo "numéro matricule : " . $sprinter->getMatricule() . "<br>";
         echo $sprinter->Demarrer() . "<br>";
         echo $sprinter->Accelerer() . "<br>";
      }
   }

Test::main();

