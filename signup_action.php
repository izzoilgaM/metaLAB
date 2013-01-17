<?
	require("common.php");
	
	$email = mysql_real_escape_string($_POST["email"]);
	$sql = sprintf("INSERT INTO emails (eid, email, tstamp) VALUES (NULL, '%s', NULL)", $email);
	$result = mysql_query($sql);
?>