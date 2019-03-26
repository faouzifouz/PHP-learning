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
    <h1> Les conditions</h1>
        <h2>exercice 1</h2>
            <?php
                $age=20;

                if ($age>=18) {
                    echo "Vous etes adulte";
                } else {
            echo "Vous etes minus ";
                }
            ?>

        <h2>exercice2</h2>
            <?php
            //Ici je cree une variable boleanne 
            $IsEasy=true;
            if ($IsEasy==1) {
                echo "C'est facile";
            } else {
                echo "C'est difficile";
            }
            ?>
        <h2>exercice3<h2>
            <?php
            $age=17;
            $genre="Homme";
            if ($genre=="Homme") {
                if ($age>=18) {
                    echo"Vous ete un homme et vous etes majeur";
                } else {
                    echo"Vous ête un homme et vous êtes mineur";
                }
                
            }else {
                if ($age>=18) {
                    echo"Vous etes une femme et majeur";
                } else {
                    echo"Vous etes une femme et mineur";
                }
                
            }
            ?>
        <h2>exercice4</h2>
            <?php
            $magnitude=5;
            switch($magnitude){
                case 1:
                echo"Micro-séisme impossible à ressentir.";
                break;
                case 2:
                echo"Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                break;
                case 3:
                echo"Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                break;
                case 4:
                echo"Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                break;
                case 5:
                echo"Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;
                case 6:
                echo"Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                break;
                case 7:
                echo"Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                break;
                case 8:
                echo"Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                break;
                case 9:
                echo"Séisme capable de tout détruire sur une très vaste zone.";
                break;
            
            }
            ?>

        <h2>exercice5<h2>
            <?php
            $maVariable="Homme";
            if ($maVariable==="Homme") {
                echo"c'est un developpeur";
            } else {
                echo"c'est une meuf dev";
            }
            ?>
        <h2>exercice6</h2>
            <?php
            $monAge=20;
            if ($monAge>=18) {
                echo"t'es grand";
            } else {
                echo"t'es minus";
            }
            ?>
       <h2>exercice7</h2>
            <?php
                $maVariable=false;

                if ($maVariable) {
                    echo"c'est bon";
                } else {
                    echo"c'est pas  bon";
                }
                ?>
                
        <h2>exercice8</h2>
            <?php
                $maVariable=true;

                if ($maVariable) {
                    echo"c'est bon";
                } else {
                    echo"c'est pas  bon";
                }
                ?>css
                
            

            



        
</body>
</html>
