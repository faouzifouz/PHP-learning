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
    <h1>les fonctions</h1>
        <h2>exo1</h2>
            <?php
            function bole ($maVarible=true){
                return $maVarible;
            }
            echo bole();
            ?>
        <h2>exo03</h2>
            <?php
            function name($firstName="fouz",$lastName="koff"){
                echo "$firstName $lastName";
            }
             name();
            ?>
        <h2>exo02</h2>
            <?php
            function same($Mavarable="retour du game"){
                echo "$Mavarable";
            }
            same();
            ?>
        <h2>exo04</h2>
            <?php
            function num($numOne=4,$numTwo=4){
                if ($numOne>$numTwo) {
                    echo"Le premier nombre est plus grand";
                } else if($numOne<$numTwo) {
                    echo"Le premier nombre est plus petit";
                }else  {

                    echo"Les deux nombres sont identiques";
                }
                
            }
            num()
            ?>

        <h2>exo05</h2>
            <?php
            function numstr($Num=5,$string="Hello"){
                echo'hey le'.' '.$Num.' '.$string;
            }
            numstr();
            ?>
        <h2>exo06</h2>
            <?php
            function npa($nom,$prenom,$age){
                echo $nom.' '.$prenom.' '.'tu as'.' '.$age.' '.'ans';
            }
            npa("fouz","koff",33)
            ?>
        <h2>exo7</h2>
            <?php
            function genre($gendre,$age){
               if ($gendre=="Homme") {
                   if ($age>=18) {
                       return"Vous êtes un homme et vous êtes majeur";
                   } else {
                    return"Vous êtes un homme et vous êtes mineur";
                   }
                   
               }else {
                   if ($age>=18) {
                       return"Vous êtes une femme et vous êtes majeur";
                   } else {
                       return"Vous êtes une femme et vous êtes mineur";
                   }
                   
               }
            }
            echo genre("femme",20);
            ?>

    <h2>Exercice 8</h2>
            <?php
                function defaultParams($nb1 = 8, $nb2 = 2, $nb3 = 10) {
                    return $nb1 + $nb2 + $nb3;
        }
                    echo defaultParams(13);
    ?>
</body>
</html>


