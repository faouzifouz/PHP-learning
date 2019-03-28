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
    <header>
        <?php
        require('header.php');

        ?>
    </header>
    <main>
        <?php
        if(isset($_GET['page'])){
            $reqt=$_GET['page'];
            switch ($reqt) {
                case 'lion':
                    require"view/lion.php";
                    break;
                
                case:'elephant':
                    require"view/elephant.php";
                    break;
                case 'impala':
                    require"view/impala.php";
                    break;
                case 'crocodile':
                    require"view/crocodile.php";
                    break;
                case 'tigre':
                    require"view/tigre.php";
                    break;
            }
        }
        ?>
<footer>
      
        <?php require('footer.php'); ?>
</footer>
        
    </main>


</body>
</html>