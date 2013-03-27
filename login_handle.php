<?

	require("common.php");
	
	$email = mysql_real_escape_string($_POST["email"]);
	$password = $_POST["pass"];
	
	$sql = sprintf("SELECT * FROM users WHERE email='%s'", $email);
	$result = mysql_query($sql);
	
	
	if(!$result || mysql_num_rows($result) < 1){ redirect("error.php"); } 
	
	else {
		$row = mysql_fetch_array($result);
		$hash = $row["password"];
		
        if ($password == $hash)
        {
			$_SESSION["user"] = array();
			$_SESSION["user"]["name"] = $row["name"];
			$_SESSION["user"]["email"] = $row["email"];
			$_SESSION["user"]["id"] = $row["uid"];
			
			if(!isset($_SESSION["redir"]))
			{
				redirect("admin.php");
			}
			else
			{
				$temp = $_SESSION["redir"];
				unset($_SESSION["redir"]);
				redirect($temp);
			}
		}
		else
		{
			redirect("error.php");
		}
	}

?>