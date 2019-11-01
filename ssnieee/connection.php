<?php
$MYSQL_DSN= "mysql:host=localhost;dbname=ssnieee";
$MYSQL_USER= "root";
$MYSQL_PASSWORD= '';


/**if(!isset($dsn,$user) || false === $password){
	throw new Exception('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
}**/

try{
$db = new PDO($MYSQL_DSN, $MYSQL_USER, $MYSQL_PASSWORD);
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "Connection failed". $e->getMessage();
}
?>