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
    <h2>exo2</h2>
        <p><a href="Vglobalsess.php">Aller sur page1</a></p>
        <?php
            session_start();
            echo '<p>Page 2 </p><p>Nom : </p>' . $_SESSION['nom'] . '<p></p> Prénom : ' . $_SESSION['prenom'] . '<br /> Âge : ' . $_SESSION['age'];
        ?>

    <h2>exo04</h2>

        <p><a href="Vglobalsess.php">Aller page 1</a></p>
        <?php
           if (isset($_COOKIE['user']) && isset($_COOKIE['psw'])) {
            echo '<p>Page 2 </p>Nom d\'utilisateur: ' . $_COOKIE['user'] . '<p></p> Mot de passe : ' . $_COOKIE['psw'];
        } else {
            echo "vous n'avez pas bien rempli le formulaire.";
        }
        ?>

    <h2>ex05</h2>
    
    <form method="POST" action="vglobalsess2.php">
        <input type="text" name="user2" placeholder="Nouveau nom d'utilisateur">
        <input type="password" name="psw2" placeholder="Nouveau mot de passe">
        <input type="submit" value="Envoyer">
    </form>
        <?php
        if (isset($_POST['user2']) && isset($_POST['psw2'])) {
            setcookie('user', $_POST['user2']);
            setcookie('psw', $_POST['psw2']);
            echo 'Nouveau nom d\'utilisateur : ' . $_COOKIE['user'] . ' | Nouveau MDP : ' . $_COOKIE['psw'];
        }
        ?>
        
</body>
</html>