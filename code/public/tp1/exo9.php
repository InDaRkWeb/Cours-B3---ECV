<?php

    function plusPetit(int $Petit1, int $Petit2, int $Petit3) {

        if($Petit1 == $Petit2 && $Petit2 == $Petit3) {
            echo ($Petit1 . ' est le plus petit !');
        } else if ($Petit1 < $Petit2 && $Petit1 < $Petit3) {
            echo ($Petit1 . ' est le plus petit !');
        } else if ($Petit2 < $Petit1 && $Petit2 < $Petit3) {
            echo ($Petit2 . ' est le plus petit !');
        }else if ($Petit3 < $Petit1 && $Petit3 < $Petit2) {
            echo ($Petit3 . ' est le plus petit !');
        }
        
        //return min($Petit1, $Petit2, $Petit3);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 9</title>
</head>
<body>
    <h1>Exo 9</h1>

    <p><?= plusPetit(5, 10, 15); ?></p>
    <p><?= plusPetit(5, 1, 15); ?></p>
    <p><?= plusPetit(5, 10, 2); ?></p>
    <p><?= plusPetit(15, 15, 15); ?></p>
</body>
</html>