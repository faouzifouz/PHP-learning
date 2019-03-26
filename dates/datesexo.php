<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Les dates</h1>
        <h2>ex01</h2>
            <?php
                echo date("d/m/y");
            ?>
        <h2>ex02</h2>
            <?php
            echo date("d-m-Y");
            ?>
        <h2>ex03</h2>
            <?php
            setlocale(LC_ALL, 'fr_FR.utf8');
            date_default_timezone_set('Europe/Paris');
            echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
            ?>
        <h2>ex04</h2>
            <?php
                $timeStamp_duJour=strtotime('today');
                $timestamp=mktime(15,00,00,8,2,2016);

                echo'Timestamp actuel:'.$timeStamp_duJour.'<p></p>Timestamp du 2 Août 2016 à 15h :'.$timestamp;
            ?>

        <h2>ex05</h2> 
        
        <h2>ex06</h2>

            <?php
            $exo6=date("t",mktime(0,0,0,2,1,2017));
            echo $exo6;
            ?>
        <h2>ex07</h2>
            <?php
                echo strftime('%A %#d %B', mktime(0,0,0,date('m'),date('d')+20,date('Y'))) . ' | Date + 20 jours';
            ?>
        <h2>ex08</h2>
            <?php
                echo strftime('%A %#d %B', mktime(0,0,0,date('m'),date('d')-22,date('Y'))) . ' | Date - 22 jours';
            ?>
           

        
</body>
</html>