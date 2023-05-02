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

    <div class="ccarte" data-tilt>
        <div class="comp"><?php echo get_element_by_name($statement_result, 'competences'); ?></div>
        <div class="column">
            <div>
                <div class="adobe"><?php echo get_element_by_name($statement_result, 'suite_adobe'); ?></div>
                <div class="sadobe">
                    <div class="psd">
                        <div class="c-align">
                            <img src="img/logopsd.png" alt="logo photoshop">
                            <p><?php echo get_element_by_name($statement_result, 'ps'); ?></p>
                        </div>
                    </div>
                    <progress id="ratepsd" max="100" value="<?php echo get_element_by_name($statement_result, 'progess_ps'); ?>"><?php echo get_element_by_name($statement_result, 'progess_ps'); ?></progress>
                    <div class="p-txt"><?php echo get_element_by_name($statement_result, 'photomontage'); ?></div>
                    <div class="ai">
                        <div class="c-align">
                            <img src="img/logoai.png" alt="logo photoshop">
                            <p><?php echo get_element_by_name($statement_result, 'illustrator'); ?></p>
                        </div>
                    </div>
                    <progress id="ratepsd" max="100" value="<?php echo get_element_by_name($statement_result, 'progess_illu'); ?>"><?php echo get_element_by_name($statement_result, 'progess_illu'); ?></progress>
                    <div class="p-txt"><?php echo get_element_by_name($statement_result, 'detourage'); ?></div>
                    <div class="pp">
                        <div class="c-align">
                            <img src="img/logopr.png" alt="logo photoshop">
                            <p><?php echo get_element_by_name($statement_result, 'premierepro'); ?></p>
                        </div>
                        <div></div>
                    </div>
                    <progress id="ratepsd" max="100" value="<?php echo get_element_by_name($statement_result, 'progess_premiere'); ?>"><?php echo get_element_by_name($statement_result, 'progess_premiere'); ?></progress>
                    <div class="p-txt"><?php echo get_element_by_name($statement_result, 'apprentissage_recent'); ?></div>
                </div>
            </div>
            <div>
                <div class="prog"><?php echo get_element_by_name($statement_result, 'prog_web'); ?></div>
                <div class="sprog">
                    <div class="html5">
                        <div class="c-align">
                            <img width="40px" style="padding-right : 10px" src="img/logohtml.png" alt="logo photoshop">
                            <p><?php echo get_element_by_name($statement_result, 'html5'); ?></p>
                        </div>
                        <div></div>
                    </div>
                    <progress id="ratepsd" max="100" value="<?php echo get_element_by_name($statement_result, 'progess_html'); ?>"><?php echo get_element_by_name($statement_result, 'progess_html'); ?></progress>
                    <div class="p-txt"><?php echo get_element_by_name($statement_result, 'utilisant_language'); ?></div>
                    <div class="css">
                        <div class="c-align">
                            <img src="img/logocss.png" alt="logo photoshop">
                            <p><?php echo get_element_by_name($statement_result, 'css'); ?></p>
                        </div>
                        <div></div>
                    </div>
                    <progress id="ratepsd" max="100" value="<?php echo get_element_by_name($statement_result, 'progress_css'); ?>"><?php echo get_element_by_name($statement_result, 'progress_css'); ?></progress>
                    <div class="p-txt"><?php echo get_element_by_name($statement_result, 'flexbox'); ?></div>
                    <div class="php">
                        <div class="c-align">
                            <img src="img/logophp.png" alt="logo photoshop">
                            <p><?php echo get_element_by_name($statement_result, 'php'); ?></p>
                        </div>
                    </div>
                    <progress id="ratepsd" max="100"value="<?php echo get_element_by_name($statement_result, 'progress_php'); ?>"><?php echo get_element_by_name($statement_result, 'progress_php'); ?></progress>
                    <div class="p-txt"><?php echo get_element_by_name($statement_result, 'familier'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="foot">
            <div class="icone">
                <div class="num">
                <?php echo get_element_by_name($statement_result, 'tel'); ?>

                </div>
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