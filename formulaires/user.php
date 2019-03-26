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
    <h1>Formulaires</h1>
        <h2>exo01</h2>
        <?php
        echo "Bonjour".' '. $_GET['name'].' '.$_GET['firstName'];
        ?>
        <p>Si tu veux changer de prénom, <a href="form.php">clique ici</a> pour revenir à la page formulaire.php.</p>

        <h2>exo02</h2>
        <?php
           echo "Bonjour".' '. $_POST['name'].' '.$_POST['firstName'];
        ?>
        <p>Si tu veux changer de prénom, <a href="form.php">clique ici</a> pour revenir à la page formulaire.php.</p>


</body>
</html>