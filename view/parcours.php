
<?php 
require_once "../model/connect.php";
require_once "../model/get.php";

$statement_result = get($pdo);

$parcours = get_element_by_name($statement_result, 'parcours');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo get_element_by_name($statement_result, 'title'); ?></title>

</head>

<body>

    <style>
        body {
            background-image: url("img/Fond.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <header>
        <div class="head">
            <div class="home">
                <a href="../index.php"><img src="img/monlogo.gif" alt="Mon Logo"> </a>
            </div>
            <div class="heady">
            <a href="parcours.php"><?php echo get_element_by_name($statement_result, 'parcours'); ?></a>

            </div>
            <div class="heady">
            <a href="travaux.php"><?php echo get_element_by_name($statement_result, 'travaux'); ?></a>

            </div>
            <div class="heady">
            <a href="competences.php"><?php echo get_element_by_name($statement_result, 'competences'); ?></a>

            </div>
        </div>
    </header>

    <div class="p-carte" data-tilt>
        <div classe="p-content">
            <div class="p-titre"><?php echo get_element_by_name($statement_result, 'parcours'); ?></div>
            <div class="p-txt"><?php echo get_element_by_name($statement_result, 'description_parcours'); ?>
            </div>
            <img src="img/imgparcours.jpg" alt="image brésil">
        </div>
    </div>

    <footer>
        <div class="foot">
            <div class="icone">
            <?php echo get_element_by_name($statement_result, 'tel'); ?>
            </div>
            <div class="divider"></div>

            <div class="icone">
                <a href="contact.php"><?php echo get_element_by_name($statement_result, 'contact'); ?></a>
            </div>
            <div class="divider"></div>
            <div class="icone">
                <img src="img/logommi.png" alt="Logo MMI">
            </div>

        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>