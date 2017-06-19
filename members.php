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
            $activePage = "members";
            include 'php/nav.php';
            include 'php/title.php';

        ?>
        <section id="papers" class="section--no-padding background-white ">
            <div class="container">
                <h2>Current Members</h2>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/blog3.jpg" alt="" class="img-responsive img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">[Name]</h3>
                        <p>[Bio]</p>
                        <p>[Research Interests] </p>
                        <p><a href="#">Links</a></p>
                    </div>
                    
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/blog3.jpg" alt="" class="img-responsive img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">[Name]</h3>
                        <p>[Bio]</p>
                        <p>[Research Interests] </p>
                        <p><a href="#">Links</a></p>
                    </div>
                    
                </div>
                <h2>Past Members</h2>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/blog3.jpg" alt="" class="img-responsive img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">[Name]</h3>
                        <p>[Bio]</p>
                        <p>[Research Interests] </p>
                        <p><a href="#">Links</a></p>
                    </div>
                    
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-4">
                        <img src="img/blog3.jpg" alt="" class="img-responsive img-member">
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center">[Name]</h3>
                        <p>[Bio]</p>
                        <p>[Research Interests] </p>
                        <p><a href="#">Links</a></p>
                    </div>
                    
                </div>
            </div>
        </section>



        <?php include 'php/footer.php'; ?>
    </body>
</html>