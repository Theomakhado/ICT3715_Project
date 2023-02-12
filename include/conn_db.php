<?php
//==========================================
//  CONNECT TO THE DATABASE
//==========================================
$dsn = 'mysql:dbname=ict3715_2022;host=localhost';
$user = 'root';
$password = '';

try
{
	$conn = new PDO($dsn,$user,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
//The PDO object can now be used to query MySQL.
?>