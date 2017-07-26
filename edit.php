<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit</title>
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
            $activePage = "edit";
            include 'php/nav.php'; 
            include 'php/title.php';
        ?>
        <section class="section--no-padding">
            <div class="container">
            	<?php
            		//edit project from Research section
                    if(isset($_GET[projectID])){
                        $projectID = $_GET[projectID];
                        //print(gettype($projectID));
                        $sql = 'SELECT * FROM Project WHERE projectID = '.$projectID;                  
            			$result = $mysqli->query($sql);
            			$row = $result -> fetch_assoc();
                        $title = $row['title'];            
                        $timeframe = $row['timeframe'];
                        $description = $row['description'];
                        ?>
                        <h2>Edit Project</h2>
                        <form method = "post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="title">Title:</label>
                              <input type="text" class="form-control" id="title" name="title" <?php echo "value = ".$title;?>
                              >
                            </div>
                            <div class="form-group">
                              <label for="timeframe">Years worked on:</label>
                              <input type="text" class="form-control" id="timeframe" name="timeframe" <?php echo "value = ".$timeframe;?>>
                            </div>         
                            <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea class="form-control" rows="5" id="description" name="description" ><?php echo $description;?></textarea>
                            </div> 
                            <p>
                                <label>Image upload: </label>
                                <input id="newImage" type="file" name="newImage" accept=".jpg, .jpeg, .png">
                            </p>  
                            <input type="submit" name = 'submit' value="Submit">
                        </form>
                        <?php                        
                    }
            	?>
            </div>
        </section>
        <?php
        	 include 'php/footer.php';
        ?>
    </body>
</html>
