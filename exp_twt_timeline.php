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
		
		<p class="experiment_description"> <!--<a id="go_button" href="http://hcl.harvard.edu/libraries/houghton/collections/pga/lear/"></a>--><br>The Teaching with Things research initiative explores digital means of engaging with and annotating material collections at many scales. This prototype presents an interface at the scale of an individual object record, attended by a matrix of fragmentary representations and interpretations. <br><br> <p id="show">Read More</p>
			<p id="more"> 
			The sample object in this record is an ostracon, a Ancient Greek note scrawled on a shard of pottery. Ostraca were meant to be ephemeral communication media, however a number of examples have survived to the present day. Harvard has a small collection hosted in Houghton, the university's rare books library.
The interface to this ostracon is divided in two. The left side is the curated portion, anchored by an animation of the ostracon in the round. Below the anchor, the record contains the kind of metadata currently available in the Harvard Library portal. At the bottom of the left panel, a number of curated videos are available. These dynamic representations show the object in detail, in movement, in performance, and in the process of measurement. On the right side of the divide is a timeline of external annotations arranged on a logarithmic scale. The log scale is an engineering device for representing data that privileges material closer to the beginning of the scale. These annotations from scholars and students going back more than a century are accessible through interactive trails. Some trails are adorned with images. Users can add new annotations, which then appear at the beginning of the timeline, and save them to a linked xml file. Annotations including images can also be added directly by xml. The prototype demonstrates the possibility of an object record composed of a diverse, fragmentary, mosaic of representations: in text, image, and video; traditional and interactive; curated and open. </p>
			
		</p>
					
</div>
		
<?php require ('footer.php');?>		

	</body>

</html>