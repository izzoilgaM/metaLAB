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
					<h2>Fragments Timeline</h2>
					<h1 style="margin-bottom:30px";> <a href="exp_twt.php">Teaching with Things</a></h1>
				</div>
				
<div class="anythingSlider anythingSlider-metallic activeSlider">

	<div class="anythingWindow" style="shadow">
		
		<ul id="slider" class="anythingBase horizontal shadow" style="width:5120px;">
		
			
				<li class="panel">
					<iframe class="shadow" src="http://player.vimeo.com/video/60721270?title=0&amp;byline=0&amp;portrait=0&amp;color=ff1300" width="640" height="360" frameborder="0" 
					webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</li>
				
	
				<li class="panel">
					<img class="shadow" src="img/projects/twt/timeline/timeline1.jpg" alt="timeline 1"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/timeline/timeline2.jpg" alt="timeline 2"/>
				</li>
	
				<li class="panel">
					<img class="shadow" src="img/projects/twt/timeline/timeline3.jpg" alt="timeline 3"/>
				</li>
		<!--
				<li class="panel">
					<img class="shadow" src="img/projects/twt/timeline/timeline4.jpg" alt="timeline 4"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/timeline/timeline5.jpg" alt="timeline 5"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/timeline/timeline6.jpg" alt="timeline 6"/>
				</li>
				-->
		
			</ul>
		
	</div>
	</div>
		
		<p class="experiment_description"> <!--<a id="go_button" href="http://hcl.harvard.edu/libraries/houghton/collections/pga/lear/"></a>--><br><!--[TEXT HERE]<br><br> <p id="show">Read More</p>
			<p id="more"> 
			<!--[MORE TEXT HERE]--></p>
			
		</p>
					
</div>
		
<?php require ('footer.php');?>		

	</body>

</html>