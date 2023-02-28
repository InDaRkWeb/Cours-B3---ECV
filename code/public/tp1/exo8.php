<?php

    function plusGrand(int $Grand1, int $Grand2) {

        if($Grand1 < $Grand2) {
            echo ($Grand2 . ' est le plus grand !');
        } 
        elseif($Grand1 == $Grand2) {
            echo ($Grand1 . ' et ' . $Grand2 . ' sont égaux');
        }
        else {
            echo ($Grand1 . ' est le plus grand !');
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>
<body>
    <h1>Exo 8</h1>

    <p><?= plusGrand(5, 10); ?></p>
</body>
</html>