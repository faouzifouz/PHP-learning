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
    <form method="GET" action="user.php">
        <input type="text" name="name" placeholder="Votre nom">
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="submit" value="Envoyer">
    </form>

    <h2>exo02</h2>
        <form method="POST" action="user.php">
        <input type="text" name="name" placeholder="Votre nom">
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="submit" value="Envoyer">
        </form>

        <h2>exo03</h2>
    <?php
        if (isset($_GET['firstName']) && isset($_GET['name'])) {
            echo "Prénom et nom transmis dans l'exercice 1 : " . $_GET['firstName'] . ' ' . $_GET['name'];
        } else {
            echo "Validez les paramètres dans l'exercice 1";
        }
    ?>
    <h2>exo04</h2>
        <?php
         if (isset($_POST['firstName']) && isset($_POST['name'])) {
            echo "Prénom et nom transmis dans l'exercice 2 : " . $_POST['firstName'] . ' ' . $_POST['name'];
        } else {
            echo "Validez les paramètres dans l'exercice 2";
        }
        ?>

    <h2>ex05,6,7,8</h2>
        <?php if (!isset($_POST['firstName2']) && !isset($_POST['name2']) && !isset($_POST['civi2'])) { ?>
        <form method="POST" action="form.php"  enctype="multipart/form-data">
        <select name="civi2" required>
        <option value="chooseGenre">Sélectionnez votre civilité</option>
        <option value="Mlle">Mademoiselle</option>
        <option value="Mme">Madame</option>
        <option value="Mr">Monsieur</option>
        </select>
        <input type="text" name="name" placeholder="Votre nom">
        <input type="text" name="firstName" placeholder="Votre prénom">
        <input type="file" name="userFile" accept=".pdf" required>
        <input type="submit" value="Envoyer">
        </form>
        <?php } else {
        $file = new SplFileInfo($_FILES['userFile']['name']);
        if($file->getExtension() == 'pdf') {
            echo "Vous êtes " . $_POST['civi2'] . ' ' . $_POST['name2'] . ' ' . $_POST['firstName2'] . ' et le fichier que vous avez uploadé est "' . $_FILES['userFile']['name'] . '".';
        } else {
            echo 'Veuillez mettre un fichier en "PDF".'; ?>
            <a href="form.php">Recommencer</a>
        <?php 
        }
    } ?>
      



</body>
</html>