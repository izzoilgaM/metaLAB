define("DB_USER","app10967255");
define("DB_PASS","oeLd07.it");
define("DB_HOST","instance36844.db.xeround.com:5099");
define("DB_NAME","metaLABsignups");

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to mysql server.');
mysql_select_db(DB_NAME);

// ensure $_SESSION exists
session_start();