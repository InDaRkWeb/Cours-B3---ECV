<?php

    function estIlMajeur(int $age) {


            if($age>=18) {
                echo 'majeur';
            } 
            else {
                echo 'mineur';
            }

            // $majeur = 'false';
            // if($age>=18){
            //     $majeur = 'true';
            // } 
            // return $majeur;

            // return ($age >= 18) ? 'majeur' : 'mineur';

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    <title>Exo 7</title>
    <p><?= estIlMajeur(35); ?></p>
</body>
</html>