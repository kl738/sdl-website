<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Delete</title>
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
            $activePage = "delete";
            include 'php/nav.php'; 
            include 'php/title.php';
        ?>
        <section class="section--no-padding">
            <div class="container">
                <?php
                    //delete project from Research section
                    if(isset($_GET[projectID])){
                        $projectID = $_GET[projectID];
                         $sql = 'Delete from Project WHERE projectID = ? ;';
                        $stmt = $mysqli->stmt_init();
                        if($stmt->prepare($sql)){
                            $stmt->bind_param('i', $projectID);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        }
                        print "<p>Project has been successfully deleted!</p>";
                        print "<p><a href='research.php'>Return to Research section.</a></p>";
                    }
                    
                    //delete publication from Publication section
                    if(isset($_GET[publicationID])){
                        $publicationID = $_GET[publicationID];
                        $sql = 'Delete from Publication WHERE publicationID = ? ;';
                        $stmt = $mysqli->stmt_init();
                        if($stmt->prepare($sql)){
                            $stmt->bind_param('i', $publicationID);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        }
                        print "<p>Publication has been successfully deleted!</p>";
                        print "<p><a href='publications.php'>Return to Publications section.</a></p>";
                    }

                    //delete member from Member section
                    if(isset($_GET[memberID])){
                        $memberID = $_GET[memberID];
                        $sql = 'Delete from Member WHERE memberID = ? ;';
                        $stmt = $mysqli->stmt_init();
                        if($stmt->prepare($sql)){
                            $stmt->bind_param('i', $memberID);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        }
                        print "<p>Member has been successfully deleted!</p>";
                        print "<p><a href='members.php'>Return to Members section.</a></p>";
                    }
                    
                    //delete event from Event section
                    if(isset($_GET[eventID])){
                        $eventID = $_GET[eventID];
                        $sql = 'Delete from Event WHERE eventID = ? ;';
                        $stmt = $mysqli->stmt_init();
                        if($stmt->prepare($sql)){
                            $stmt->bind_param('i', $eventID);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        }
                        print "<p>Event has been successfully deleted!</p>";
                        print "<p><a href='events.php'>Return to Events section.</a></p>";
                    }
                ?>
            </div>
        </section>
        <?php
            include 'php/footer.php';
        ?>
    </body>
</html>
