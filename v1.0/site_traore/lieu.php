<!DOCTYPE html>
<html lang="fr">

<hea>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</hea>

<body>
    <?php include "bandeau.php" ?>
    <div id="gauche">


        <?php
        echo "<h1>A la découverte d’un lieu splendide</h1>";
        $vignettes = ["img/lieu1.jpg", "img/lieu2.jpg", "img/lieu3.jpg", "img/lieu4.jpg", "img/lieu5.jpg"];

        foreach ($vignettes as $vignette)
            echo "<img src='$vignette' />";
        ?>
    </div>
    <?php include "menu.php" ?>
   <?php include"bas.php"?>
</body>

</html>