<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $succes = null;
    $erreur = null;
    $nbr = 4;

    if(isset($_GET['nbrInput'])){
        if($_GET['nbrInput'] > $nbr){
            $erreur = "nombre plus grand";
        }
        elseif ($_GET['nbrInput'] < $nbr){
            $erreur = "nombre plus petit";
        }
        else
             $succes = "bravo ! vous avez devinez le nbr " .$nbr ;
    }
    if($erreur){?>
       <p style="color:red;"><?= $erreur;?></p> <?php
    }
    elseif($succes){?>
        <p style="color:green;"><?= $succes;?></p><?php
    }
    ?>
    <form action="demo.php" method="GET">
        <input type="number" placeholder="entrer nombre entre 0 à 10" name="nbrInput" value="">
        <input type="submit" value="valider">
    </form>
</body>
</html>