<!DOCTYPE HTML>

<?

	require("common.php");

	$sql = sprintf("SELECT posts.*, users.name FROM posts 
						INNER JOIN users
						ON posts.uid=users.uid
						ORDER BY posts.pid DESC");
	$result = mysql_query($sql);
	
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>
			metaLAB (at) Harvard
		</title>	
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="css/main.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.roundabout.min.js"></script>
		<script type="text/javascript" src="js/carousel.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="./img/favicon.ico">		
	</head>
	<body>
		<div class="container">

<?php require ('header.php');?>

			<div class="projects innershadow">
		
			<div id="content">
			
			<!--
				<!--video, sign-up box, & description
				<div class="row"> 
					<div class="span8.5" style="position:relative">
						<div>
							<iframe id="video" class="shadow" src="http://player.vimeo.com/video/46773161?
							title=0&amp;byline=0&amp;portrait=0&amp;color=ff1e00" width="640" 
							height="360" frameborder="0"webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
					<div class="span3.5">
					
					<div id="description" class="shadow">
								<p class ="description"> <strong class="black"> metaLAB </strong> \mit&#601;-l&aelig;b\ <em>n.</em> <br>(1) an experimental research, design & 
								development unit dedicated 
								to innovation in the arts, media & humanities&mdash;hosted at the <a href="http://cyber.law.harvard.edu/">Berkman Center for Internet & Society</a> 
					</div>
					
					-->
					
				<div class="row">
					<div class="span12 posts">
					
					<h1>The Latest</h1>
		<!--<a href="admin.php">Admin panel</a>-->
		<!-- here will go the posts -->
		<?
		
			while($row = mysql_fetch_array($result))
			{
				//$user_id = $row["uid"];
	
				//$user_sql = sprintf("SELECT name FROM users WHERE uid='%d'", $user_id);
				//$user_result = mysql_query($user_sql);
				//$user_row = mysql_fetch_array($user_result);
				//$username = $user_row["name"];
				
				$comments_sql = sprintf("SELECT * FROM comments WHERE pid='%d'", $row["pid"]);
				$comments_result = mysql_query($comments_sql);
				
				$tags_sql = sprintf("SELECT * FROM tags WHERE pid='%d'", $row["pid"]);
				$tags_result = mysql_query($tags_sql);
				
				$username = $row["name"];
				
				print('<h2><a href="view_post.php?p=' . $row["pid"] . '">' . $row["title"] . '</a></h2>');
				print('<i>By ' . $username . ' &middot; ' . $row["tstamp"] . '</i><br><br>');
				print(stripslashes($row["content"]));
				
				print('<h3>Tags</h3><div class="tags" style="margin-bottom: 15px; overflow: hidden;">');
				
				if(mysql_num_rows($tags_result) > 0)
				{
					while($tags_row = mysql_fetch_array($tags_result))
					{
						print('<div class="tag" style="float: left; padding: 5px; background: #CCCCCC; border: 1px solid #AAAAAA; margin-right: 5px;">' . stripslashes($tags_row["content"]) . '</div>');
					}
				}
				else
				{
					print('No tags on this post.');
				}
				print('</div>');
				print('<h3>Comments</h3>');
				
				if(mysql_num_rows($comments_result) > 0)
				{
					while($comment_row = mysql_fetch_array($comments_result))
					{
						print('<b>' . $comment_row["cname"] . '</b> (' . $comment_row["cemail"] . ')<br><br>' . $comment_row["ctext"] . '<br><br>');
					}
				}
				else
				{
					print('No comments on this post.');
				}
				print('<br><br><br>');
			}
		
		?>
					
					
					</div>
				</div>
					
					<!--Events
						<div id="upcoming">
						<img class="shadow" src="./img/upcoming.jpg"/>
						<img class="eventpic" src="./img/arboretum.jpg"/>
						<h1> Arboretum Lorem Ipsum </h1>
						<h2> February 18 <br> 2:30 PM </h2>
						<h2> Arnold Arboretum </h2>
						<img class="eventpic" style="opacity:0.4"; src="./img/arboretum.jpg"/>
					-->
						
						</div>
					</div>
				</div>
				<!--
				<div class="row">
					<div class="span12">
						Box to left of description
						<div id="des_illus" class="shadow">
						</div>
					
					</div>
				</div>
			
				<div class="row">
					<div class="span12">
					<iframe id="contentiframe" class="shadow"></iframe>
					</div>
				</div>
					-->
			</div>	
			
				<?php require ('footer.php');?>
			</div>
		

	
	</body>

</html>
	
