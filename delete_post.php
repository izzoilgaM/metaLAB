<?
	require("common.php");
	
	$pid = mysql_real_escape_string($_GET["p"]);
	
	$sql = sprintf("DELETE FROM posts WHERE pid='%d'", $pid);
	mysql_query($sql);
	
	redirect("admin.php");
	
?>