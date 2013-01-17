define("DB_USER","your_database_username_here");
define("DB_PASS","your_database_user's_password_here");
define("DB_HOST","your_database_ip_address_or_url_here");
define("DB_NAME","your_database_name_here");

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to mysql server.');
mysql_select_db(DB_NAME);

// ensure $_SESSION exists
session_start();