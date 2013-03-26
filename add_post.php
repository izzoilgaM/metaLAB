<?
	require("common.php");
?>

<html>
	<head>	
	
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

<script type="text/javascript"> 

bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

</script>

	</head>
	<body>
		<h1>Create a new post</h1>
		<a href="admin.php">&larr; Back</a><br><br>
		<form action="add_post_handle.php" method="post">
			<input type="text" name="title" placeholder="TITLE" /><br>
			<textarea rows="25" cols="100" name="content" placeholder="GIVE ME VALUABLE CONTENT"></textarea><br>
			<input type="text" name="tstamp" placeholder="2013-03-01 17:50:29" /><br>
			<input type="text" name="tags" placeholder="TAG ME, TAG ME TOO" /><br>
			<input type="submit" value="Publish post" />
		</form>
							
	</body>
</html>