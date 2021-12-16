<?php 
// DB credentials.
define('DB_HOST','exedesk.fr');
define('DB_USER','EXE_1_7ojoy');
define('DB_PASS','n9jxpt84.V2xYU?S');
define('DB_NAME','EXE_1_7ojoy');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
