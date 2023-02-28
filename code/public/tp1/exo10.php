<?php

function premierElementTableau($array) {
    if (isset($array) && empty($array)){
        return null;
    }
    return $array[0];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 10</title>
</head>
<body>
    <h1>Exo 10</h1>

    <p><?= premierElementTableau([5, 10, 15]); ?></p>
    <p><?= premierElementTableau([55, 1, 15]); ?></p>
    <p><?= premierElementTableau([]); ?></p>
</body>
</html>