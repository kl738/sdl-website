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
                        $sql = 'SELECT * FROM Project WHERE projectID = '.$projectID;                  
            			$result = $mysqli->query($sql);
            			$row = $result -> fetch_assoc();
                        $title = $row['title'];          
                        $timeframe = $row['timeframe'];
                        $description = $row['description'];
                        $imagepath = $row['imagepath'];
                        ?>
                        <h2>Edit Project</h2>
                        <form method = "post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="title">Title:</label>
                              <input type="text" class="form-control" id="title" name="title" <?php echo "value = '$title'";?>
                              >
                            </div>
                            <div class="form-group">
                              <label for="timeframe">Years worked on:</label>
                              <input type="text" class="form-control" id="timeframe" name="timeframe" <?php echo "value = '$timeframe'";?>>
                            </div>         
                            <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea class="form-control" rows="5" id="description" name="description" ><?php echo $description;?></textarea>
                            </div> 
                            <img <?php echo 'src="/img/project_thumbnails/',$imagepath,'"';?> alt="" class="img-responsive"></img><br>
                            <p>
                                <label>Image upload: (leave blank to keep the above photo)</label>
                                <input id="newImage" type="file" name="newImage" accept=".jpg, .jpeg, .png">
                            </p>  
                            <input type="submit" name = 'save' value="Save">
                        </form>
                        <?php                         
		                    if(isset($_POST["save"])){	                				                
				                //datafield

				                $post_title = $_POST['title'];
				                $post_timeframe = $_POST['timeframe'];
				                $post_description = $_POST['description'];

			                    //change photo if uploaded         
			                    if($_FILES['newImage']['error']!=UPLOAD_ERR_NO_FILE){	
			                    	print("photo uploaded");	                        
			                        $newImage = $_FILES['newImage'];
							        $originalName = $newImage['name'];
			                        $tempName = $newImage['tmp_name'];
								    move_uploaded_file($tempName, "img/project_thumbnails/$originalName");
								    print("<br>".$originalName);
			                        $sql = "Update Project Set title = ? , timeframe = ?, description = ?,  imagepath = ?, WHERE projectID = ? ";
			                    	$stmt = $mysqli->stmt_init();
			                    	if($stmt->prepare($sql)){
			                        $stmt->bind_param('ssssi', $post_title, $post_timeframe, $post_description, $originalName, $projectID);
			                        $stmt->execute();
			                        $result = $stmt->get_result();
			                    	}				                        
			                    }

			                    //if no photo uloaded, keep original photo
			                    else{
			                    	print("photo not uploaded<br>");
			                    	$sql = "Update Project Set title = ? , timeframe = ?, description = ? WHERE projectID = ? ";
			                    	$stmt = $mysqli->stmt_init();
			                    	if($stmt->prepare($sql)){
			                        $stmt->bind_param('sssi', $post_title, $post_timeframe, $post_description, $projectID);
			                        $stmt->execute();
			                        $result = $stmt->get_result();
			                    	}
			                    }
			                    print "<br>Changes have been saved.";	
			                    echo "<script type='text/javascript'>window.location = 'edit.php?projectID=$projectID'</script>";		                                       
                    		}
                    		
                    	}
                    	
                    	?>
                    
            </div>
        </section>
        <?php
        	 include 'php/footer.php';
        ?>
    </body>
</html>
