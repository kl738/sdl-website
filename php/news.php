<section class="background-white section--no-padding">
	<div class="container">
		<?php
            if(isset($_SESSION['user'])){?>
                <h2>Add Event</h2>
                <form method = "post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="title">Title:</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="caption">Caption:</label>
                      <input type="text" class="form-control" id="caption" name="caption">
                    </div>         
                    <p>
                        <label>Image upload: </label>
                        <input id="newImage" type="file" name="newImage" accept=".jpg, .jpeg, .png">
                    </p>  
                    <input type="submit" name = 'submit' value="Submit">
                </form>
                <br>   <?php

                if(isset($_POST["submit"])){
                    $title = filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING);
                    $caption = filter_input(INPUT_POST, 'caption', FILTER_SANITIZE_STRING);
                    $newImage = $_FILES['newImage'];
                    $originalName = $newImage['name'];
                    if(!empty($title)&&!empty($caption)){
                        if ( $newImage['error'] == 0 ) {
                           $tempName = $newImage['tmp_name'];
                           move_uploaded_file($tempName, "img/events/".$originalName);
                        }
                        $sql = "INSERT INTO Event (title, caption, imagepath) VALUES (?,?,?)";
                        $stmt = $mysqli->stmt_init();
                        if($stmt->prepare($sql)){
                            $stmt->bind_param('sss', $title, $caption, $originalName);
                            $stmt->execute();
                            $result = $stmt->get_result();
                        }
                        print("<p>The file $originalName was uploaded successfully.</p>");
                        header("Refresh:0");
                    }
                }
            }
        ?>
		<h2>Recent News</h2>
	</div>
</section>
<section class="background-white">
	<div class="container">
		<div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade" data-interval="5000" data-pause="false">
	      	<!-- Indicators-->
	      	<?php 
	      		$sql = 'SELECT * FROM Event';
      			$result = $mysqli->query($sql);
      		?>
	      	<ol class="carousel-indicators">
	      	<?php
	      		$i = 0;
	      		$sql = 'SELECT * FROM Event';
      			$result = $mysqli->query($sql);
      			while ($row = $result->fetch_assoc()) {
      				if($i==0){
      					echo '<li data-target="#carousel-home" data-slide-to="0" class="active"></li>';
      					$i+=1;
      				}
      				else{
      					echo '<li data-target="#carousel-home" data-slide-to=',$i,'></li>';
      					$i+=1;
      				}
      			}
	        	// <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
	        	// <li data-target="#carousel-home" data-slide-to="1"></li>
	        	// <!-- <li data-target="#carousel-home" data-slide-to="2"></li>
	        	// <li data-target="#carousel-home" data-slide-to="3"></li>
	        	// <li data-target="#carousel-home" data-slide-to="4"></li>
	        	// <li data-target="#carousel-home" data-slide-to="5"></li>
	        ?>
	      	</ol>
      		<!-- Wrapper for slides-->
      		<?php 
      			$sql = 'SELECT * FROM Event';
      			$result = $mysqli->query($sql);
      			print('<div role="listbox" class="carousel-inner">');
      			$i=0;
      			while ($row = $result->fetch_assoc()) {
      				$url = 'img/events/'.$row[imagepath];
      				$title = $row[title];
      				$caption = $row[caption];
              $id = $row[eventID];
      				// if it's the first item, then set its to be item active, else the class is just item
      				if($i==0){
	      				echo "<div style=\"background-image: url(","'{$url}');\""," class=\"item active\">";
	      					print("<div class=\"carousel-caption\" id=\"news\">");
	      						print("<h1 class=\"super-heading text-stand-out\">{$title}</h1>");
	      						print("<p class=\"super-paragraph text-stand-out\">{$caption}</p>");
                    if(isset($_SESSION['user'])){
                      echo '<p><a>Edit</a> | <a href=>Delete</a></p>';
                    }
	      					print("</div>");
	      				print("</div>");
	      				$i+=1;
      				}
      				else{
      					echo "<div style=\"background-image: url(","'{$url}');\""," class=\"item\">";
	      					print("<div class=\"carousel-caption\" id=\"news\">");
	      						print("<h1 class=\"super-heading text-stand-out\">{$title}</h1>");
	      						print("<p class=\"super-paragraph text-stand-out\">{$caption}</p>");
                    if(isset($_SESSION['user'])){
                      echo '<p><a>Edit</a> | <a href=>Delete</a></p>';
                    }
	      					print("</div>");
	      				print("</div>");
      				}
	      		}
	      		print("</div>");
			?>
		    <!--Left Right Arrows-->
		    <a class="left carousel-control" href="#carousel-home" data-slide="prev">
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-home" data-slide="next">
			    <span class="sr-only">Next</span>
			</a>
    	</div>
	</div>
</section>