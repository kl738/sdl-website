<section class="background-white section--no-padding">
	<div class="container">
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
	        	<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
	        	<li data-target="#carousel-home" data-slide-to="1"></li>
	        	<!-- <li data-target="#carousel-home" data-slide-to="2"></li>
	        	<li data-target="#carousel-home" data-slide-to="3"></li>
	        	<li data-target="#carousel-home" data-slide-to="4"></li>
	        	<li data-target="#carousel-home" data-slide-to="5"></li> -->
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
      				// print($url);
      				// print($title);
      				// print($caption);
      				// if it's the first item, then set its to be active, else the class is just item
      				if($i==0){
	      				echo "<div style=\"background-image: url(","'img/events/jumbotron1.jpg');\""," class=\"item active\">";
	      					print("<div class=\"carousel-caption\" id=\"news\">");
	      						print("<h1 class=\"super-heading\">{$title}</h1>");
	      						print("<p class=\"super-paragraph\">{$caption}</p>");
	      					print("</div>");
	      				print("</div>");
	      				$i+=1;
      				}
      				else{
      					echo "<div style=\"background-image: url(","'img/events/jumbotron1.jpg');\""," class=\"item\">";
	      					print("<div class=\"carousel-caption\" id=\"news\">");
	      						print("<h1 class=\"super-heading\">{$title}</h1>");
	      						print("<p class=\"super-paragraph\">{$caption}</p>");
	      					print("</div>");
	      				print("</div>");
      				}
	      		}
	      		print("</div>");
			?>
		    <!-- <div role="listbox" class="carousel-inner">
		    	<div style="background-image: url('img/events/hatespeech.png');" class="item active">		          	
	          		<div class="carousel-caption" id="news">
	            		<a href="https://github.com/t-davidson/hate-speech-and-offensive-language"><h1 class="super-heading">Data for Hate Speech Paper Released</h1>
	            		<p class="super-paragraph">6/2017: Link to the Github Respository containing the Data and Source Code</p></a>
	          		</div>
		        </div>
		        <div style="background-image: url('img/events/icwsm17acceptance.jpg');" class="item">
	          		<div class="carousel-caption" id="news">
		            	<h1 class="super-heading">ICWSM 2017 Papers Accepted</h1>
		            	<p class="super-paragraph">3/2017: “Automated Hate Speech Detection and the Problem of Offensive Language” and “Cultural Values and Cross-cultural Video Consumption on YouTube” were accepted to ICWSM 2017</p>
		          	</div>
		        </div>
		    </div> -->
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