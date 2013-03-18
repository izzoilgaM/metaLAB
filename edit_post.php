<?
	require("common.php");
	
	$pid = mysql_real_escape_string($_GET["p"]);
	
	$sql = sprintf("SELECT title,content,tstamp FROM posts WHERE pid='%d'", $pid);
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$tags_sql = sprintf("SELECT * FROM tags WHERE pid='%d'", $pid);
	$tags_result = mysql_query($tags_sql);
	
	$tags = "";
	
	while($tag_row = mysql_fetch_array($tags_result))
	{
		$tags .= $tag_row["content"] . ", ";
	}
	
	$tags = substr($tags, 0, strlen($tags) - 3);
?>

<html>
	<head>	
	</head>
	<body>
		<h1>Edit a post</h1>
		<a href="admin.php">&larr; Back</a><br><br>
		<form action="edit_post_handle.php" method="post">
			<? print('<input type="hidden" name="pid" value="' . $pid . '" />'); ?>
			<? print('<input type="text" name="title" value="' . $row["title"] . '" />'); ?><br>
			<? print('<textarea rows="6" cols="30" name="content">' . $row["content"] . '</textarea>'); ?><br>
			<? print('<input type="text" name="tstamp" placeholder="2013-03-01 17:50:29" value="' . $row["tstamp"] . '" />'); ?><br>
			<? print('<input type="text" name="tags" placeholder="Tag me, tag me too" value="' . $tags . '" />'); ?><br>
			<input type="submit" value="Update post" />
		</form>
	</body>
</html>