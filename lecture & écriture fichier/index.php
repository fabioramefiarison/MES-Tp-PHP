<?php
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'fichier.txt';
$ressource = fopen($fichier, 'r');
var_dump(fgets($ressource));

//fstat($ressource) les informations sur les fichier 
//echo fread($ressource, 2) lire les deux premiéres caractères
?>