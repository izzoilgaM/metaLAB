<?
	require("common.php");
?>

<html>
	<head>	
	</head>
	<body>
		<h1>Create a new post</h1>
		<a href="admin.php">&larr; Back</a><br><br>
		<form action="add_post_handle.php" method="post">
			<input type="text" name="title" placeholder="This is a post on bears" /><br>
			<textarea rows="6" cols="30" name="content" placeholder="This is the post on bears' text."></textarea><br>
			<input type="text" name="tstamp" placeholder="2013-03-01 17:50:29" /><br>
			<input type="text" name="tags" placeholder="Tag me, tag me too" /><br>
			<input type="submit" value="Publish post" />
		</form>
							
	</body>
</html>