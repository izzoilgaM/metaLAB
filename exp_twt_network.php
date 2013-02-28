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
					<h2>Social Network of Things</h2>
					<h1 style="margin-bottom:30px";> <a href="exp_twt.php">Teaching with Things</a></h1>
				</div>
				
<div class="anythingSlider anythingSlider-metallic activeSlider">

	<div class="anythingWindow" style="shadow">
		
		<ul id="slider" class="anythingBase horizontal shadow" style="width:5120px;">
		
			
				<li class="panel">
					<iframe class="shadow" src="http://player.vimeo.com/video/60721830?title=0&amp;byline=0&amp;portrait=0&amp;color=ff1e00" width="640" height="323" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/network/network1.jpg" alt="network 1"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/network/network2.png" alt="network 2"/>
				</li>
	
				<li class="panel">
					<img class="shadow" src="img/projects/twt/network/network3.png" alt="network 3"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/network/network4.png" alt="network 4"/>
				</li>
			
				<li class="panel">
					<img class="shadow" src="img/projects/twt/network/network5.png" alt="network 5"/>
				</li>
		
				<li class="panel">
					<img class="shadow" src="img/projects/twt/network/network6.png" alt="network 6"/>
				</li>
			</ul>
	</div>
	</div>
		
		<p class="experiment_description"> <!--<a id="go_button" href="http://hcl.harvard.edu/libraries/houghton/collections/pga/lear/"></a>--><br>The network of things is an application for visualizing relationships between things, which are represented in the form of fragments. Each fragment is a visual, material or experiential depiction of an object and collectively defines the whole in this digital interface. The relationship types are based on Dublin Core metadata specifications for eliciting relations between descriptive object representations.<br><br> <p id="show">Read More</p>
			<p id="more"> 
			The project grapples with the challenge of digital representation of objects, which exist in complex network of other objects. The understanding of this contextual relationship within the objects eco-system becomes a critical component for descriptively illustrating an object. The application Fragments – Network of things aims to represent these relationships systems and build a narrative representation of the objects.<br><br>

Objects within the ecosystem are represented according to the fragment model where the object is broken down into bits of representational visual media. Each of these pieces called fragments reflects a material or experiential quality of the object. The fragments in the form of images, texts and 3D models can be uploaded into to application database to become a part of the fragment collection. Every fragment carries a set of metadata attributes such as title, associated date and description.<br><br>

Relationship between the fragments are defined according to Dublin Core element metadata semantics for specifying relations types such as object, part-whole, reference and creative. The object relation defines fragments composing the object; part-whole describes the subset relation: reference the reference source and creative relation represents the derivation, adaptation or interpretation of another fragment. These connections are visualized using graphic symbols and line networks. To add granularity to the ties between the fragment pieces the network lines can be created between specific local points on the visual media.<br><br>

In conclusion, this WebGL application is designed as a tool to define relationships between different media content. The user can upload information in different formats, images or 3D models and define relations between them. The relationships are symbolized into four different types and illustrated in the form of visual links. For the implementation of this browser application Node.js, MongoDB, SocketIO along with JQuery have been used. <br><br>

The project was executed by Sneha Khullar (Harvard School of Design - MDes’13), under Presidential Information Technology Fellowship in conjunction with the course (Romance Studies 220 - Fragments of a Material History of Literature) offered by Jeffrey Schnapp and Matthew Battles in Comparative Literature Department at Graduate School of Arts and Sciences Harvard University in Fall 2012. The applications data content was borrowed from the project works of two course students - Julianne VanWagenen and Romina Maidel.

</p>
			
		</p>
					
</div>
		
<?php require ('footer.php');?>		

	</body>

</html>