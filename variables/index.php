<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Les variables exercices</h1>
        <h2>Exercice 1</h2>
            <?php
                $nom='Titah';
                $prenom='Fouz';
                $age='33';

                echo"Bonjour $prenom, enfant de la famille $nom ayant atteint de level $age!"
            ?>
        <h2>Exercices 2</h2>
            <?php
                $km=1;
                    echo"$km \n";
                $km=3;
                    echo"$km \n";
                $km=125;
                    echo"$km";
            ?>
        <h2>Exercice 3</h2>
            <?php
                $myString = "Hello World!";
                $myInteger = 7;
                $myFloat = 7.1;
                $myBoolean = true;
                echo "$myString </br> $myInteger </br> $myFloat </br> $myBoolean";
            ?>

        <h2>Exercice 4</h2>
            <?php
                $myEmptyInteger = null;
                echo "$myEmptyInteger </br>";
                $myEmptyInteger = 8;
                echo "$myEmptyInteger </br>";
            ?>

        <h2>Exercice 5</h2>
            <?php
                $firstResult = 3 + 4;
                $secondResult = 5 * 20;
                $thirdResult = 45 / 5;
                echo "$firstResult </br> $secondResult </br> $thirdResult"
            ?>

<       <h2>Exercice 6</h2>
            <?php
                $price = 785;
                $percent = $price / 10 * 3; // Ceci fait 30% du prix
                $toPay = $price - $percent;
                echo "Prix de départ : $price € </br> Ristourne : $percent € </br> Prix à payer : $toPay €"
             ?>

</body>
</html>