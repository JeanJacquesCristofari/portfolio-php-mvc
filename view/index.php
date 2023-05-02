
<?php 
require_once "model/connect.php";
require_once "model/get.php";

$statement_result = get($pdo);

$parcours = get_element_by_name($statement_result, 'parcours');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo get_element_by_name($statement_result, 'title'); ?></title>
</head>

<body>

    <style>
        body {
            background-image: url("view/img/Fond.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <header>
        <div class="head">
            <div class="home">
                <a href="index.php"><img src="view/img/monlogo.gif" alt="Mon Logo"> </a>
            </div>
            <div class="heady">
                <a href="view/parcours.php"><?php echo get_element_by_name($statement_result, 'parcours'); ?></a>
            </div>
            <div class="heady">
                <a href="view/travaux.php"><?php echo get_element_by_name($statement_result, 'travaux'); ?></a>
            </div>
            <div class="heady">
                <a href="view/competences.php"><?php echo get_element_by_name($statement_result, 'competences'); ?></a>
            </div>
        </div>
    </header>

    <div class="carte" data-tilt>
        <img style="margin-top: 5px;" src="view/img/maphoto.webp" alt="Ma photo">
        <h2><?php echo get_element_by_name($statement_result, 'title'); ?></h2>
        <p><?php echo get_element_by_name($statement_result, 'description'); ?></p>
        <div class="reseau">
            <a href="https://www.facebook.com/jeanjacques.cristofari.5"><img src="view/img/facebook.png" alt="Logo facebook">
            </a>
            <a href="https://www.instagram.com/bileljack/"><img class="instag" src="view/img/insta.png" alt="Logo insta">
            </a>
            <a href="https://twitter.com/kiroserize"><img src="view/img/twitter.png" alt="Logo twitter"> </a>
        </div>
    </div>

    </div>

    <footer>
        <div class="foot">
            <div class="icone">
            <?php echo get_element_by_name($statement_result, 'tel'); ?>
            </div>
            <div class="divider"></div>

            <div class="icone">
                <a href="img/contact.php"><?php echo get_element_by_name($statement_result, 'contact'); ?>
</a>
            </div>
            <div class="divider"></div>
            <div class="icone">
                <img src="view/img/logommi.png" alt="Logo MMI">
            </div>

        </div>
    </footer>

    <script src="view/js/script.js"></script>
</body>

</html>