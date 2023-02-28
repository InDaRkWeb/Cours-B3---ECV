<?php

function plusGrand($array) {
    if (isset($array) && empty($array)){
        return null;
    }
    return max($array);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 12</title>
</head>
<body>
    <h1>Exo 12</h1>

    <p><?= plusGrand([5, 10, 15]); ?></p>
    <p><?= plusGrand([55, 1, 15, 45]); ?></p>
    <p><?= plusGrand([10]); ?></p>
</body>
</html>