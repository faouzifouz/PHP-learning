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
    <h1>Variables global session</h1>
        <h2>exo01</h2>
            <?php
            echo "Navigateur utilisé : " . $_SERVER['HTTP_USER_AGENT'] . "<p></p> IP du client : " . $_SERVER['REMOTE_ADDR'] . '<p></p> Nom du serveur connecté : ' . $_SERVER['SERVER_NAME'];
            ?>
        <h2>ex02</h2>
            <p><a href="Vglobalsess2.php">Aller sur la page 2 </a></p>
            <?php
            session_start();
            echo 'Mes variables';
            $_SESSION['nom'] = 'Koff';
            $_SESSION['prenom'] = 'Fouz';
            $_SESSION['age'] = 33;
            ?>

        <h2>ex03</h2>
            <form method="POST" action="#">
                <input type="text" name="user" placeholder="Nom d'utilisateur">
                <input type="password" name="psw" placeholder="Mot de passe">
                <input type="submit" value="Envoyer">
            </form>


            <?php
                if (isset($_POST['user']) && isset($_POST['psw'])) {
                    setcookie('user', $_POST['user']);
                    setcookie('psw', $_POST['psw']);
                }
            ?>

        <h2>ex04</h2>
        <p><a href="Vglobalsess2.php"> Aller page2</a></p>
            <?php
                echo 'Page 1';
            ?>

</body>
</html>