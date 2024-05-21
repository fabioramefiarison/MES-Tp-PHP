<?php
require("./Compte.php");

//PROGRAMME PRINCIPLALE
$compte1 = new Compte(20000, 2);
echo $compte1->affiche($compte1->get_somme(), $compte1->get_taux()) . "<br>";
echo $compte1->depot(10000);
echo $compte1->retrait(4444000);
?>

