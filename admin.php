<?

	require("common.php");
	$sql = sprintf("SELECT title, pid FROM posts");
	$result = mysql_query($sql);
	
?>

<html>
	<head>
	</head>
	<body>
		<h1>Admin</h1>
		<? print('Hello, ' . $_SESSION["user"]["name"] . "!"); ?>
		<a href="logout.php">Logout</a>
		<br>
		<a href="add_post.php">Add post</a> | <a href="index.php">View posts</a>
		<br><br>
		<i>All posts:</i><br>
		<?
		
			while($row = mysql_fetch_array($result))
			{
				print($row["title"] . ' <a href="view_post.php?p=' . $row["pid"] . '">View post</a> | <a href="edit_post.php?p=' . $row["pid"] . '">Edit post</a> | <a href="delete_post.php?p=' . $row["pid"] . '">Delete post</a><br>');
			}
		
		?>
		
		
		<br>
		
	</body>
</html>