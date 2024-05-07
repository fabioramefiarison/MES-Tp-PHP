<?php require("header.php") ;
    $parfuns = [
        'fraise' => 4,
        'vanille' =>5,
        'chocolat' =>3,
    ];
    $cornets = [
        'pot' => 2,
        'cornet' => 3,
    ];
    $supplements = [
        'pepite aux chocolat' => 1,
        'chantilly' => 0.5,
    ];
    $ingredients = [];
    $total = 0;
    if (isset($_GET['parfun'])) {
       foreach ($_GET['parfun'] as $parfun) {?>
      <pre><?php var_dump($cornets)?></pre>
      <?php
            if(isset($parfuns[$parfun])){
                $ingredients [] = $parfun;
                $total += $parfuns[$parfun];
            } 
        }}
        if (isset($_GET['supplement'])) {
            foreach ($_GET['supplement'] as $supplement) {
                if(isset($supplements[$supplement])){
                    $ingredients [] = $supplement;
                    $total += $supplements[$supplement];
                } 
            }}
        if (isset($_GET['cornet'])) {
                $cornet = $_GET['cornet'];
                if(isset($cornets[$cornet])){
                    $ingredients [] = $cornet;
                    $total += $cornets[$cornet];
                } 
            }?>
<!--fonction checkbox -->
<?php
    function checkbox(string $name , string $value , array $data) : string{
    $attributs = "";
    if (isset($data[$name]) && in_array($value,$data[$name]))  {
        $attributs = $attributs . "checked";
    }
        return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributs>
    HTML;
    }
 ?>
 <!--fonction radio -->
<?php
    function radio(string $name , string $value , array $data) : string{
    $attributs = "";
    if (isset($data[$name]) && $value === $data[$name])  {
        $attributs = $attributs . "checked";
    }
        return <<<HTML
    <input type="radio" name="$name" value="$value" $attributs>
    HTML;
    }
 ?>
 
    <h1>Composer vootre glace</h1>
    <form action="demo.php" method="GET">
        <!----checkbox------>
        <?php foreach ($parfuns as $parfun => $prix) {?>
        <div class="checkbox">
           <?= checkbox('parfun' , $parfun , $_GET) ?>
           <?= $parfun ?> - <?= $prix ?> £ <br>
        </div>
        <?php } ?>
         <!-----radio--->
         <?php foreach ($cornets as $cornet => $prix) {?>
        <div class="radio">
            <?= radio('cornet' , $cornet , $_GET) ?>
            <?= $cornet ?> - <?= $prix ?> £ <br>
        </div>
        <?php } ?>
        <!-----checkbox-------->
        <?php foreach ($supplements as $supplement => $prix) {?>
        <div class="checkbox">
            <?= checkbox('supplement' , $supplement , $_GET) ?>
            <?= $supplement ?> - <?= $prix ?> £ <br>
        </div>
        <?php } ?>
        <input type="submit" value="composer" name="btn">
    </form>
    <h2>votre glace </h1>
<ul>
    <?php foreach($ingredients as $ingredient){?>
        <li><?=$ingredient?></li>
    <?php } ?>
</ul>
<p>prix = <?= $total ?> $ </p>
    <h2>$_GET</h2>
    <pre><?php var_dump($_GET) ?></pre>

    <h2>$_POST</h2>
    <pre><?php var_dump($_POST) ?></pre>


</body>
</html>
