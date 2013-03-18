<?

	require('common.php');
	
	// fetch form stuff
	$name = stripslashes(mysql_real_escape_string($_POST["name"]));
	$email = mysql_real_escape_string($_POST["email"]);
	$password = $_POST["pass"];
	
	$reason = "<b>Registration Failed:</b><ul>";
	
	if($name == "" || $email == "" || $password == "")
	{
		$reason .= "<li class=\"square\">A field was left blank.</li>";
	}
	
	$sql_emailcheck = sprintf("SELECT * FROM users WHERE email='%s'", $email);
	$result_emailcheck = mysql_query($sql_emailcheck);
	
	if(mysql_num_rows($result_emailcheck) > 0)
	{
		$reason .= "<li class=\"square\">Specified email address is already linked to an account.</li>";
	}
	
	$reason .= "</ul>";
	
	if($reason == "<b>Registration Failed:</b><ul></ul>")
	{
		// success
		$hash = $password;
		$sql = sprintf("INSERT INTO users (uid, email, password, name) VALUES(NULL, '%s', '%s', '%s')", $email, $hash, $name);
		mysql_query($sql);
		
		$_SESSION["user"] = array();
		$_SESSION["user"]["name"] = $name;
		$_SESSION["user"]["email"] = $email;
		$_SESSION["user"]["id"] = mysql_insert_id();
		
		//echo $sql;
		redirect("admin.php");
	}
	else
	{
		redirect("error.php");
	}

?>