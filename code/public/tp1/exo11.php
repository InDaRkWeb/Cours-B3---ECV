<?php

function dernierElementTableau($array) {
    if (isset($array) && empty($array)){
        return null;
    }
    return end($array);
    //return array_reverse($array)[0];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 11</title>
</head>
<body>
    <h1>Exo 11</h1>

    <p><?= dernierElementTableau([5, 10, 15]); ?></p>
    <p><?= dernierElementTableau([55, 1, 15, 45]); ?></p>
    <p><?= dernierElementTableau([10]); ?></p>
</body>
</html>