<section class="background-white section--no-padding">
	<div class="container">
		<h2>Recent News</h2>
	</div>
</section>
<section class="background-white">
	<div class="container">
		<div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade" data-interval="3000" data-pause="false">
	      	<!-- Indicators-->
	      	<!-- <ol class="carousel-indicators">
	        	<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
	        	<li data-target="#carousel-home" data-slide-to="1"></li>
	        	<li data-target="#carousel-home" data-slide-to="2"></li>
	      	</ol> -->
      		<!-- Wrapper for slides-->
		    <div role="listbox" class="carousel-inner">
		    	<?php 
		    	$sql = 'SELECT * FROM Event;';
        		$result = $mysqli->query($sql);
        		while ($row = $result->fetch_assoc()) {?>
        			<div style="background-image: url('img/events/{$row['imagepath']}');" class="item active">
		          		<div class="overlay"></div>
		          		<div class="carousel-caption" id="news">
		            		<h1 class="super-heading"><?php {$row['title']}?></h1>
		            		<p class="super-paragraph"><?php {$row['caption']}.{$row['date']}?></p>
		          		</div>
		       		</div>
        		<?php
        		}
        		?>
		        <div style="background-image: url('img/carousel1.jpg');" class="item active">
		          	<div class="overlay"></div>
		          		<div class="carousel-caption" id="news">
		            		<h1 class="super-heading">Event 1 </h1>
		            		<p class="super-paragraph">Caption</p>
		          		</div>
		        </div>
		        <div style="background-image: url('img/carousel2.jpg');" class="item">
		          	<div class="overlay"></div>
		          		<div class="carousel-caption" id="news">
		            		<h1 class="super-heading">Event 2 </h1>
		            		<p class="super-paragraph">Caption</p>
		          		</div>
		        </div>
		        <div style="background-image: url('img/carousel3.jpg');" class="item">
		          	<div class="overlay"></div>
		          		<div class="carousel-caption" id="news">
		           			<h1 class="super-heading">Event 3</h1>
		            		<p>Caption</p>
		          		</div>
		        </div>
		    </div>
		    <!--Left Right Arrows-->
		    <!-- <a class="left carousel-control" href="#carousel-home" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-home" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a> -->
    	</div>
	</div>
</section>