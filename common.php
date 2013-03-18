<?

	// database constants	
	define("DB_USER","app10967255");
	define("DB_PORT","5099");
	define("DB_PASS","42Kirkland");
	define("DB_HOST","instance36844.db.xeround.com.");
	define("DB_NAME","metalab_cms");

	$link = mysql_connect(DB_HOST . ":" . DB_PORT, DB_USER, DB_PASS) or die('Could not connect to mysql server.');
	mysql_select_db(DB_NAME);
	
	// ensure $_SESSION exists
    session_start();
	
	$public_pages = "login|login_handle|register|register_handle|index";

	if(!preg_match("/(:?" . $public_pages . ")\.php$/", $_SERVER["PHP_SELF"]))
	{
		// not a public page, are they logged in?
		if(!isset($_SESSION["user"]))
		{
			// redirect to login.php.
			$pagearray = explode("/", $_SERVER["PHP_SELF"]);
			$pagecount = count($pagearray);
			$page = $pagearray[$pagecount - 1];
			$_SESSION["redir"] = $_SERVER["PHP_URI"] . $page . "?" . $_SERVER["QUERY_STRING"];
			redirect("login.php");
		}
		
	}
	
	function redirect($page)
	{	
		// redirect user 
		$protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
		$host  = $_SERVER["HTTP_HOST"];
		$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
		header("Location: {$protocol}://{$host}{$path}/{$page}");
	}
?>
