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
    <h1>Les tableaux</h1>
        <h2>exo1</h2>
            <?php
            $mois=array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre' );
            echo"tableau";
            ?>
        <h2>exo02</h2>
            <?php
                echo "<p>$mois[2]</p>";
                echo "<p>$mois[5]</p>";
                $mois[7]="août";
                echo "<p>$mois[7]<p>";
            ?>
        <h2>exo03</h2>
            <?php
            $auvergne=array(
                01=>'Ain',
                03=>'Allier',
                07=>'Ardèche',
                15=>'Cantal',
                26=>'Drome',
                38=>'Isère',
                42=>'Loire',
                43=>'Haute-Loire',
                63=>'Puy-de-Dôme',
                69=>'Rhône',
                73=>'Savoie',
                74=>'Haute-Savoie',
            );
            echo "$auvergne[69]\n";
            $auvergne[57]='Metz';
            foreach ($auvergne as $key => $value) {
                echo "<p>Le département de $value porte le numero $key</p>";
            }
            ?>

        <h2>exo04</h2>
            <?php
            $prenom=array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
            //parcour le tableau
            foreach ($prenom as $key => $value) {
                echo"<p>Salut $value, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)</p>";
            }
            ?>

</body>
</html>