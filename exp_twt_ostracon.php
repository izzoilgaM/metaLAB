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
					<h2>3D Object Interface — Ostracon</h2>
					<h1 style="margin-bottom:30px";> <a href="exp_twt.php">Teaching with Things</a></h1>
				</div>
				
<div class="anythingSlider anythingSlider-metallic activeSlider">

	<div class="anythingWindow" style="shadow">
		
		<ul id="slider" class="anythingBase horizontal shadow" style="width:5120px;">
		
			
				<li class="panel">
					<iframe class="shadow" src="http://player.vimeo.com/video/60720409?title=0&amp;byline=0&amp;portrait=0&amp;color=ff1300" width="640" height="360" frameborder="0" 
					webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/3d/ostracon1.png" alt="Ostracon 1"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/3d/ostracon2.png" alt="Ostracon2"/>
				</li>
	
				<li class="panel">
					<img class="shadow" src="img/projects/twt/3d/ostracon3.png" alt="Ostracon 3"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/3d/ostracon4.png" alt="Ostracon 4"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/3d/ostracon5.png" alt="Ostracon 5"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/3d/ostracon6.png" alt="Ostracon 6"/>
				</li>
			</ul>
	</div>
	</div>
		
		<p class="experiment_description"> <!--<a id="go_button" href="http://hcl.harvard.edu/libraries/houghton/collections/pga/lear/"></a>--><br>Pseudo WebGL based interface for displaying and annotating a 3D representation of an object.<br><br> <p id="show">Read More</p>
			<p id="more"> 
			This demo explores the possibilites of combining a three dimensional interface with an annotation system. The user can explore a textured, lowpoly 3D model of a collection member. Annotations can be added to the object in 3D space, and they remain anchored to a specific part of the model. Notes are automatically highlited when their anchor point is close to the center of the screen, meaning that a zoomed out perspective will activate many notes at once, while zooming in will reduce the ammount of notes that can be selected simultaneously, thus reinforcing the contrast between the general view and the close up of specific parts. The demo is based on Three.js, a javascript webGL framework, and uses a simple PHP-MySQL backend to store and retrieve the notes. Models can be produced using any conventional 3D suite, or be acquired via low-end 3D scanning techniques such as stereophotogrammetry.</p>
			
		</p>
					
</div>
		
<?php require ('footer.php');?>		

	</body>

</html>