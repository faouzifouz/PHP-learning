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
    <form action ='' method="POST">
    Entrer le 1er nombre:<input type="text" name="nbr1">
    Entrer le 2ieme nombre <input type="text" name="nbr2">

    Choix de l'opération : <select name="operation">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select>

    <input type="submit" value="calculer"/>
    <input type="reset" value="effacer">

    <?php

    if ( isset($_POST['nbr1']) &&  isset ($_POST['nbr2']) &&  isset($_POST['operation'] )){
 
    if ( !empty ( $_POST['nbr1'] ) && !empty( $_POST['nbr2'] ) && !empty( $_POST['operation'] )){
  
  
        $n1=$_POST['nbr1'];
        $n2=$_POST['nbr2'];
        $opr= $_POST['operation'];
  
  
 switch($opr) {

 case'+': $c=$n1+$n2 ;
              echo " la resultat est : $c" ;
              break;
 case'-': $c=$n1-$n2 ;
              echo " la resultat est : $c" ;
              break;
 case'*': $c=$n1*$n2 ;
              echo " la resultat est : $c" ;
              break;
               
 case'/': if($n2!=0){
              $c=$n1/$n2 ;
              echo " la resultat est : $c" ;}
              else echo"Erreur, Division impossible par zéro !";
              break;
               
   

  
 }
 }
 else echo" veuillez entrer les nombres"; }
 
?>
</body>
</html>