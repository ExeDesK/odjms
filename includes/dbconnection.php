<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','EXE_1_6g5tk');
define('DB_PASS','DJvz[-vgztqbvK1D');
define('DB_NAME','EXE_1_6g5tk');
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