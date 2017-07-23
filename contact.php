<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome & Pixeden Icon Stroke icon font-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- Google fonts - Roboto Condensed & Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
        <!-- lightbox-->
        <link rel="stylesheet" href="css/lightbox.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/cornell-logo.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <?php 
            require_once 'php/config.php'; 
            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $activePage = "contact";
            include 'php/nav.php';
            include 'php/title.php'; 
        ?>
        <div class="container">
            <p class="lead">The lab is located in Uris Hall in Central Campus of Cornell University.</p>
            <div class="row">
                <div class="col-sm-4">
                    <h2>Lab Director</h2>
                    <p class="lead">Michael Macy</p>
                    <p><b>Email: </b>mwm14@cornell.edu</p>
                </div>
                <div class="col-sm-4">
                    <h2>Lab Manager</h2>
                    <p class="lead">Chris Cameron</p>
                    <p><b>Email: </b>cjc73@cornell.edu</p>
                </div>
                <div class="col-sm-4">
                    <h2>Lab Address</h2>
                    <p class="lead">372 Uris Hall<br>
                    Cornell University<br>
                    Ithaca, NY 14853</p>
                    <p><b>Phone: </b>607-255-4555</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=uris%20hall&key=AIzaSyAzzPyNkaXsF8mod_eaZuQouHyarGGSV2k" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <h2>Webmaster</h2>
                    <p class="lead">Kevin Lin</p>
                    <p><b>Email: </b>kl738@cornell.edu</p>
                </div>
            </div>

        </div>




        <?php include 'php/footer.php'; ?>
    </body>
</html>