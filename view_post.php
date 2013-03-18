<?
	require("common.php");
	
	$pid = mysql_real_escape_string($_GET["p"]);
	$sql = sprintf("SELECT * FROM posts WHERE pid='%d'", $pid);
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$user_id = $row["uid"];
	
	$user_sql = sprintf("SELECT name FROM users WHERE uid='%d'", $user_id);
	$user_result = mysql_query($user_sql);
	$user_row = mysql_fetch_array($user_result);
	$username = $user_row["name"];
	
	$comments_sql = sprintf("SELECT * FROM comments WHERE pid='%d'", $pid);
	$comments_result = mysql_query($comments_sql);
	
	$tags_sql = sprintf("SELECT * FROM tags WHERE pid='%d'", $pid);
	$tags_result = mysql_query($tags_sql);
?>

<html>
	<head>
	</head>
	<body>
		<h1><? print('<a href="view_post.php?p=' . $pid . '">' . $row["title"] . '</a>'); ?></h1>
		<!-- <? //print('<img src="img/avatars/' . $user_id . '.jpg" />'); ?> -->
		<i>By <? print($username); ?> &middot; <? print($row["tstamp"]); ?></i><br><br>
		<? print(stripslashes($row["content"])); ?>
		<h3>Tags</h3>
		<div class="tags" style="margin-bottom: 15px; overflow: hidden;">
		<?
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
		?>
		</div>
		<h3>Comments</h3>
		<?
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
		?>
	</body>
</html>