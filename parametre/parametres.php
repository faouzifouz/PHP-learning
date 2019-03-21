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
    <h1> Les Parametres(url)</h1>
        <h2>exo01</h2>
        
        <?php
            if (isset($_GET['prenom']) && isset($_GET['nom'])) // On a le nom et le prénom
{
	        echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
                else // Il manque des paramètres, on avertit le visiteur
{
	            echo 'Il faut renseigner un nom et un prénom !';
}
?>
        <h2>exo02</h2>
            <?php
            if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['age'])) {
                echo "Bonjour " . $_GET['prenom'] . ' ' .  $_GET['nom'] . ' vous êtes level ' . $_GET['age'] . ' !';

            }else {
                echo"veuillez entrer un age";
            }
            ?>
        <h2>exo03</h2>
            <?php
             if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
                echo 'La date de début est le : ' . $_GET['dateDebut'] . '<br />La date de fin est le : ' .  $_GET['dateFin'];
            } else {
                echo "afficher les dates svp";
            }
            ?>
        <h2>exo04</h2>
            <?php
            
            if (isset($_GET['langage']) && isset($_GET['serveur'])) {
                echo 'Le langage est: "' . $_GET['langage'] . '" hébergé grâce à: "' . $_GET['serveur'] . '".';
            } else {
                echo "veuiler indiquer le bon serveur et language";
            }
        
            ?>

        <h2>exo05</h2>
    
            <?php
            if (isset($_GET['semaine'])) {
            echo "Nous sommes la " . $_GET['semaine'] . 'e semaine du mois.';
            }   else {
            echo "Mettez la semaine";
            }
            ?>

        <h2>exo06</h2>
            
            <?php
            if (isset($_GET['batiment']) && isset($_GET['salle'])) {
                echo"c'est le batiment".' '. $_GET['batiment'].' '.'la salle'.' '. $_GET['salle'];
            }else{
                echo"Error";
            }
            ?>





                 
        
        
    
</body>
</html>