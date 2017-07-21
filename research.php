<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Research</title>
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
            $activePage = "research";
            include 'php/nav.php'; 
            include 'php/title.php';
        ?>
        <section class="section--no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="lead">We study the interplay between network topology and the dynamics of social interaction, using computational models, data from on-line networks, and laboratory experiments with human participants.
                        </p>

                        <p class="lead">We are supported by grants from the National Science Foundation and the MINERVA Initiative.</p>

                        <p class="lead">The SDL Director is Michael Macy, Goldwin Smith Professor of Arts and Sciences at Cornell University, with a joint appointment in the Department of Sociology and the Department of Information Science.</p>

                        <p class="lead">The Assistant Director is Chris Cameron, a PhD candidate at Cornell.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/general/nsf.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <section class="section--padding-small">
            <div class="container">
                <?php
                    if(isset($_SESSION['user'])){?>
                        <h2>Add Project</h2>
                        <form method = "post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="title">Title:</label>
                              <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                              <label for="timeframe">Years worked on:</label>
                              <input type="text" class="form-control" id="timeframe" name="timeframe">
                            </div>         
                            <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                            </div> 
                            <p>
                                <label>Image upload: </label>
                                <input id="newImage" type="file" name="newImage" accept=".jpg, .jpeg, .png">
                            </p>  
                            <input type="submit" name = 'submit' value="Submit">
                        </form>
                        <br>   <?php

                        if(isset($_POST["submit"])){
                            $title = filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING );
                            $timeframe = filter_input(INPUT_POST, 'timeframe', FILTER_SANITIZE_STRING);
                            $description =  filter_input( INPUT_POST, 'description', FILTER_SANITIZE_STRING );
                            $newImage = $_FILES['newImage'];
                            $originalName = $newImage['name'];
                            if(!empty($title)&&!empty($description)&&!empty($timeframe)){
                                if ( $newImage['error'] == 0 ) {
                                   $tempName = $newImage['tmp_name'];
                                   move_uploaded_file($tempName, "img/project_thumbnails/".$originalName);
                                }
                                $sql = "INSERT INTO Project (imagepath, title, description, timeframe) VALUES (?,?,?,?)";
                                $stmt = $mysqli->stmt_init();
                                if($stmt->prepare($sql)){
                                    $stmt->bind_param('ssss', $originalName, $title, $description, $timeframe);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                }
                                
                                print("<p>The file $originalName was uploaded successfully.</p>");
                                header("Refresh:0");

                            }
                        }
                    }
                ?>
                <h2>Current Projects</h2>
                <?php 
                    $sql = 'SELECT * FROM Project';
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $thumbnail = "img/project_thumbnails/".$row['imagepath'];
                        $title = $row['title'];
                        $timeframe = $row['timeframe'];
                        $description = $row['description'];
                        echo '<div class="row row-buffer">';
                            echo '<div class="col-sm-3">';
                                echo '<img src="',$thumbnail,'" alt="" class="img-thumbnail img-project">';
                            echo '</div>';
                            echo '<div class="col-sm-9">';
                                echo '<h3>',$title,'</h3>';
                                echo '<p>',$timeframe,'</p>';
                                echo '<p>',$description,'</p>';
                            echo '</div>';
                        echo '</div>';    
                    }
                ?>
                <!-- <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="img/project_thumbnails/hatespeech.png" alt="" class="img-thumbnail img-project">
                    </div>
                    <div class="col-sm-9">
                        <h3>Hate Speech</h3>
                        <p>2014-Present </p>
                        <p>Thomas Davidson, Michael Macy, Dana Warmsley(Grad SDL member in Center for Applied Mathematics), and Ingmar Weber (at QCRI) have been working on a project to study hate speech and hate speakers of social media. They recently published a <a href="img/publication_pdf/hatespeechdetection.pdf">paper</a> (<a href="https://github.com/t-davidson/hate-speech-and-offensive-language">data/source code</a>) focusing on some of the problems associated with using machine learning models to automatically detect hate speech. They are currently looking further into the characteristics of hate speakers and their personal networks to better understand the phenomenon.</p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="img/project_thumbnails/uris.jpg" alt="" class="img-thumbnail img-project">
                    </div>
                    <div class="col-sm-9">
                        <h3>Complex Social Contagion</h3>
                        <p>2014-Present Supported By: Minerva</p>
                        <p>By examining the digital traces of social contagion during times of civil unrest we aim to better understand how facts and ideas penetrate social networks and improve models of social contagion.</p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="img/project_thumbnails/EnglandNormInversePaletteCrop.jpg" alt="" class="img-thumbnail img-project">
                    </div>
                    <div class="col-sm-9">
                        <h3>Cross-cultural differences in communication networks</h3>
                        <p>2012-Present Supported By: NSF</p>
                        <p>Using Twitter data, this project aims to compare the topology of communication networks by cultural and economic factors at the country level.</p>
                    </div>
                </div> -->
                <!-- <h2>Past Projects</h2> -->
            </div>
        </section>






        <?php include 'php/footer.php'; ?>
    </body>
</html>