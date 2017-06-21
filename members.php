<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lab Members</title>
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
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <?php 
            require_once 'php/config.php'; 
            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $activePage = "members";
            include 'php/nav.php';
            include 'php/title.php';

        ?>
        <section id="papers" class="section--no-padding background-white ">
            <div class="container">
                <h2>Current Members</h2>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/michael.jpg" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Michael Macy</h3>
                        <h4 class="text-center">Goldwin Smith Professor of Arts and Sciences</h4>
                        <h5 class="text-center">Department of Sociology; Department of Information Science</h5>
                        <p>Michael Macy left the farm in Tennessee where he grew up to attend Harvard, where he received his B.A. and later Ph.D, along with an M.A. from Stanford. He is currently Goldwin Smith Professor of Arts and Sciences in Sociology and Director of the Social Dynamics Laboratory at Cornell, where he has worked since 1997. With support from the National Science Foundation, the Department of Defense, and Google, his research team has used computational models, online laboratory experiments, and digital traces of device-mediated interaction to explore familiar but enigmatic social patterns, such as circadian rhythms, the emergence and collapse of fads, the spread of self-destructive behaviors, cooperation in social dilemmas, the critical mass in collective action, the spread of high-threshold contagions on small-world networks, the polarization of opinion, segregation of neighborhoods, and assimilation of minority cultures. Recent research uses 509 million Twitter messages to track diurnal and seasonal mood changes in 54 countries, and telephone logs for 12B calls in the UK to measure the economic correlates of network structure. His research has been published in leading journals, including Science, PNAS, American Journal of Sociology, American Sociological Review, and Annual Review of Sociology.</p>
                        <p><a href="#">Links</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/members/minsu.png" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Minsu Park</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Information Science</h5>
                        <p>My main research interest is how to measure and explain collective behaviors within a group or society. Among broad interests, the core areas that I am currently focusing on are (1) the role of social media —defined broadly as technologies that facilitate social behavior among people— in localized social contexts; (2) the ways that people use culture to make connections with one another; and (3) the relationships between one's cultural tastes, their social structure, and technological meeting points of those.</p>
                        <p><a href="#">Links</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/blog3.jpg" alt="" class="img-thumbnail img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">Minsu Park</h3>
                        <h4 class="text-center">PhD Student</h4>
                        <h5 class="text-center">Department of Information Science</h5>
                        <p>My main research interest is how to measure and explain collective behaviors within a group or society. Among broad interests, the core areas that I am currently focusing on are (1) the role of social media —defined broadly as technologies that facilitate social behavior among people— in localized social contexts; (2) the ways that people use culture to make connections with one another; and (3) the relationships between one's cultural tastes, their social structure, and technological meeting points of those.</p>
                        <p><a href="#">Links</a></p>
                    </div>                    
                </div>               
                <h2>Past Members</h2>                
            </div>
        </section>



        <?php include 'php/footer.php'; ?>
    </body>
</html>