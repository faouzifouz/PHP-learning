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
    <h1>Les boucles</h1>
        <h2>exercice1</h2>
            <?php
           for($i=0;$i<10;$i++){
               echo"$i\n";
           }
           ?>
        <h2>exercie2</h2>
           <?php
           $a=0;
           $b=40;
           while ($a<20) {
                $calc=$a*$b;
                echo"$calc\n";
                $a++;
           }
           ?>
        <h2>exercice3</h2>
           <?php
           $a=100;
           $b=10;
           while ($a >= 10) {
               $calc=$a*$b;
               echo"$calc\n";
               $a--;
           }
           ?>
        <h2>exercice4</h2>
           <?php
           $a=1;
           while ($a < 10) {
               echo"$a\n";
               $a=$a+($a/2);
           }
           ?>

        <h2>exercice5</h2>
           <?php
           $a=1;
           while ($a <=15) {
               echo $a. "\n On y arrive presque \n";
            $a ++;
               
           }
           ?>
        <h2>exercice6</h2>
           <?php
           for ($i=20; $i >=0 ; $i--) { 

               echo " c'est presque bon.n°$i\n ";
           }

           ?>
        
        <h2>exercice7</h2>
           <?php
           $b=0;
           for($i=1;$i<=100;$i+=15){
               $b++;
            echo"On tient le bon bout.n°$b\n";
        }
           ?>
        <h2>exercice8</h2>
            <?php
            $b=0;
            for ($i=200; $i >= 0 ; $i-=12) { 
                $b++;
                echo"Enfin.n°$b\n";
            }

            ?>
            

           
</body>
</html>