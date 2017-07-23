<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Publications</title>
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
            $activePage = "publications";
            include 'php/nav.php';
            include 'php/title.php'; 
        ?>
        <section id="papers" class="section--no-padding background-white ">
            <div class="container">
                <?php
                    if(isset($_SESSION['user'])){?>
                        <h2>Add Paper</h2>
                        <form method = "post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="title">Title:</label>
                              <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                              <label for="authors">Authors:</label>
                              <input type="text" class="form-control" id="authors" name="authors">
                            </div>         
                            <div class="form-group">
                              <label for="conference">Conference:</label>
                              <input type="text" class="form-control" id="conference" name="conference">
                            </div> 
                            <p>
                                <label>Thumbnail Image upload: </label>
                                <input id="thumbnailImage" type="file" name="thumbnailImage" accept=".jpg, .jpeg, .png">
                            </p>
                            <p>
                                <label>PDF upload: </label>
                                <input id="pdf" type="file" name="pdf" accept=".pdf">
                            </p>  
                            <input type="submit" name = 'submit' value="Submit">
                        </form>
                        <br>   <?php

                        if(isset($_POST["submit"])){
                            $title = filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING );
                            $authors = filter_input(INPUT_POST, 'authors', FILTER_SANITIZE_STRING);
                            $conference =  filter_input( INPUT_POST, 'conference', FILTER_SANITIZE_STRING );
                            $thumbnailImage = $_FILES['thumbnailImage'];
                            $thumbnailOriginalName = $thumbnailImage['name'];
                            $pdf = $_FILES['pdf'];
                            $pdfOriginalName = $pdf['name'];
                            if(!empty($title)&&!empty($authors)&&!empty($conference)){
                                if ( $thumbnailImage['error'] == 0 ) {
                                   $tempName = $thumbnailImage['tmp_name'];
                                   move_uploaded_file($tempName, "img/publication_thumbnails/".$thumbnailOriginalName);
                                }
                                if ( $pdf['error'] == 0 ) {
                                   $tempName = $pdf['tmp_name'];
                                   move_uploaded_file($tempName, "img/publication_pdf/".$pdfOriginalName);
                                }
                                $sql = "INSERT INTO Publication (imagepath, title, authors, conference, pdfpath) VALUES (?,?,?,?,?)";
                                $stmt = $mysqli->stmt_init();
                                if($stmt->prepare($sql)){
                                    $stmt->bind_param('sssss', $thumbnailOriginalName, $title, $authors, $conference, $pdfOriginalName);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                }
                                print("<p>The file $thumbnailOriginalName and $pdfOriginalName was uploaded successfully.</p>");
                                header("Refresh:0");
                            }
                        }
                    }
                ?>
                <?php 
                    $sql = 'SELECT * FROM Publication';
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $thumbnail = "img/publication_thumbnails/".$row['imagepath'];
                        $title = $row['title'];
                        $authors = $row['authors'];
                        $conference = $row['conference'];
                        $pdf = "img/publication_pdf/".$row['pdfpath'];
                        echo '<div class="row row-buffer">';
                            echo '<div class="col-sm-3">';
                                echo '<img src="',$thumbnail,'" alt="" class="img-responsive img-publication">';
                            echo '</div>';
                            echo '<div class="col-sm-9">';
                                echo '<h3>',$title,'</h3>';
                                echo '<p>AUTHORS: ',$authors,'</p>';
                                echo '<p>',$conference,' <a href=',$pdf,'>PDF</a></p>';
                                if(isset($_SESSION['user'])){
                                    echo'<p><a>Edit</a> | <a href=>Delete</a></p>';
                                }
                            echo '</div>';
                        echo '</div>';    
                    }
                ?>
                <!-- <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="img/publication_thumbnails/youtube.png" alt="" class="img-responsive img-publication">
                    </div>
                    <div class="col-sm-9">
                        <h3>Cultural values and cross-cultural video consumption on YouTube</h3>
                        <p>AUTHORS: Park M, Park J, Baek YM, Macy M</p>
                        <p>PLoS ONE 2017 <a href="img/publication_pdf/youtubeculture.pdf">PDF</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="img/publication_thumbnails/hatespeech.png" alt="" class="img-responsive img-publication">
                    </div>
                    <div class="col-sm-9">
                        <h3>Automated Hate Speech Detection and the Problem of Offensive Language</h3>
                        <p>AUTHORS: Davidson T, Warmsley D, Macy M, and Weber I</p>
                        <p>ICWSM 2017 <a href="img/publication_pdf/hatespeechdetection.pdf">PDF</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="" alt="" class="img-responsive img-publication">
                    </div>
                    <div class="col-sm-9">
                        <h3>Effects of violence on risk perception, policy preferences, and pro-social behavior: evidence from an online experiment.</h3>
                        <p>AUTHORS: Plascencia F</p>
                        <p>NARSC <a href="#">PDF</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="" alt="" class="img-responsive img-publication">
                    </div>
                    <div class="col-sm-9">
                        <h3>Stated Preferences and Well-Being in Risky Environments.</h3>
                        <p>AUTHORS: Plascencia F</p>
                        <p>NARSC 2016 <a href="#">PDF</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="" alt="" class="img-responsive img-publication">
                    </div>
                    <div class="col-sm-9">
                        <h3>Fuzzy Analysis for Intuitionistic Preferences on Complex Networks</h3>
                        <p>AUTHORS: Plascencia F</p>
                        <p>NARSC 2016 <a href="#">PDF</a></p>
                    </div>
                </div>
                <div class="row row-buffer">
                    <div class="col-sm-3">
                        <img src="" alt="" class="img-responsive img-publication">
                    </div>
                    <div class="col-sm-9">
                        <h3>Cooperative Games, Learning and Strategic Interaction in Social Networks.</h3>
                        <p>AUTHORS: Plascencia F</p>
                        <p>NARSC 2014 <a href="#">PDF</a></p>
                    </div>
                </div> -->
            </div>
        </section>




        <?php include 'php/footer.php'; ?>
    </body>
</html>