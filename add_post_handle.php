<?
	require("common.php");
	
	$title = stripslashes(mysql_real_escape_string($_POST["title"]));
	$content = stripslashes(mysql_real_escape_string($_POST["content"]));
	// split all the tags around commas and give each one their own place in the 'tags' array.
	$tags = explode(",", mysql_real_escape_string($_POST["tags"]));
	$tstamp = (empty($_POST["tstamp"])) ? date("Y-m-d H:i:s") : $_POST["tstamp"];
	$user_id = $_SESSION["user"]["id"];
	
	$sql = sprintf("INSERT INTO posts (`pid`, `uid`, `title`, `content`, `tstamp`)
					VALUES (NULL, '%d', '%s', '%s', '%s')", 
					$user_id, $title, $content, $tstamp);
	mysql_query($sql);
	
	// loop over the tags array
	for($t = 0; $t < count($tags); $t++)
	{
		$tag = trim($tags[$t]); // for this tag, make sure all trailing & leading whitespace is trimmed.
		$tags_sql = sprintf("INSERT INTO tags (tid, pid, content) VALUES(NULL, '%d', '%s')", $pid, $tag);
		mysql_query($tags_sql);
	}
	
	redirect("admin.php");
	
?>