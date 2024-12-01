<?php
//constant variable
/*define('SERVERNAME', '127.0.0.1:3306');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'studentdb');
*/

$dbHost= getenv("DB_HOST");
$dbUser= getenv("DB_USER");
$dbName= getenv("DB_NAME");
$dbPwd= getenv("DB_PWD");

try {
	//connect with database
	$connect = mysqli_connect($dbHost,$dbUser,$dbPwd,$dbName);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
		//echo "Connected successfully";
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}

//echo "abc<br>";

?>