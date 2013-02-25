<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>
			metaLAB (at) Harvard
		</title>	
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/main.css" rel="stylesheet" type="text/css"/>
		<link href="css/carousel_media.css" rel="stylesheet" type="text/css"/>
		<link href="css/anythingslider.css" rel="stylesheet" type="text/css"/>
		<link href="css/animate.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.roundabout.min.js"></script>
		<script type="text/javascript" src="js/readmore.js"></script>
		<script type="text/javascript" src="js/jquery.anythingsliderfx.js"></script>
		<script type="text/javascript" src="js/jquery.anythingslider.js"></script>
		<script type="text/javascript" src="js/jquery.anythingslider.video.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
		<script type="text/javascript" src="js/swfobject.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="./img/favicon.ico">		
		
		<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider();
			
		});
	</script>
	</head>
	<body>
		<div class="container">

<?php require ('header.php');?>
			
<div class="projects innershadow">

				<div id="project-header">
					<h2>Navigable Sprite Sheet</h2>
					<h1 style="margin-bottom:30px";> <a href="exp_twt.php">Teaching with Things</a></h1>
				</div>
				
<div class="anythingSlider anythingSlider-metallic activeSlider">

	<div class="anythingWindow" style="shadow">
		
		<ul id="slider" class="anythingBase horizontal shadow" style="width:5120px;">
		
			
				<li class="panel">
					<iframe class="shadow" src="http://player.vimeo.com/video/60356106?title=0&amp;byline=0&amp;portrait=0&amp;color=ff1300" width="640" height="360" frameborder="0" 
					webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/sprite/sprite1.png" alt="Sprite 1"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/sprite/sprite2.png" alt="Sprite 2"/>
				</li>
	
				<li class="panel">
					<img class="shadow" src="img/projects/twt/sprite/sprite3.png" alt="Sprite 3"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/sprite/sprite4.png" alt="Sprite 4"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/sprite/sprite5.png" alt="Sprite 5"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/sprite/sprite6.png" alt="Sprite 6"/>
				</li>
			</ul>
	</div>
	</div>
		
		<p class="experiment_description"> <!--<a id="go_button" href="http://hcl.harvard.edu/libraries/houghton/collections/pga/lear/"></a>--><br>Pseudo 3D interface generated from 3 differently angled 360∞ photographic captures.<br><br> <p id="show">Read More</p>
			<p id="more"> 
			This is an experiment using the lowest common denominator web technologies to simulate a 3D representation of an object: javascript and CSS are used to animate a mosaic where three 360∞ photographic captures taken from different angles are displayed on a 36x3 grid. An html container displays a single frame of the captures. Dragging the mouse sideways will make the object rotate, while dragging it up or down will switch amongst the 3 different strips(side view, 45 degree and top view). The images were composed using a custom made capture station consisting of an arduino controled lazy susan, where objects are placed and made to rotate while being captured by 3 stationary webcams placed at different altitudes in respect to the what is being scanned. A processing script then composes the images from the camera into the grid format required by the webpage. There is a simple PHP-MySQL backend for uploading and retrieving images.</p>
			
		</p>
					
</div>
		
<?php require ('footer.php');?>		

	</body>

</html>