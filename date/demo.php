<?php
require("header.php");
//fonction dump
function dump($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
//constante jours
define('JOURS',[
    'lundi',
    'mardi',
    'mercredi',
    'jeudi',
    'vendredi',
    'samedi',
    'dimanche',
]);
//definition d'une constante CRENEAUX
define("CRENEAUX",[
[
    [8,12],
    [14,19],
],
[
    [8,12],
    [14,19],
],
[
    [8,12],
],
[
    [8,12],
    [14,19],
],
[
    [8,12],
    [14,19],
],
[],
[],
]) ;

function creneaux_html(array $creneaux){
    if (count($creneaux) === 0 || empty($creneaux)) {//même chose
        return 'Fermé';
    }
$phrases = [];
foreach ($creneaux as $creneau ) {
    $phrases [] = "de <strong>{$creneau[0]}h à {$creneau[1]}h </strong>";
}
return "Ouvert " .implode(' et ', $phrases);
}

function in_creneaux(int $heure , array $creneau){

}
?>

<?php 
//récuperer l'heure d'aujourd'hui 
$heure = (int)date('G');
//récuperer le creneau d'aujourd'hui
$creneauDay = CRENEAUX[date('N')-1] ;
dump($heure);
dump($creneauDay);
dump(date('e'));
exit();
?>
<body>
<div class="creneaux">
    <h2>Horraire d'ouverture :</h2>
    <?php in_creneaux($heure,creneau) ?>
    <div style="background-color:red ;width:200px">Le magasin est fermé</div>
    <div style="background-color:green ;width:200px">Le magasin est ouvert</div>
    <ul>
             <?php foreach (JOURS as $k => $jours) {?>
        <li <?php if($k+1 == date('N')){?> style="color:green" <?php  } ?>>
             <strong><?= $jours ?> :</strong>
            <?= $creneaux = creneaux_html(CRENEAUX[$k]);?>
        </li>
              <?php } ?>
    </ul>
</div>


</body>
</html>