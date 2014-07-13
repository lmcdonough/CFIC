<?php
	//include 'header_admin.php'; 

$host = "localhost";
$username = "internal_dds";
$password = "db_user";
$db = "internal_cfic";

$connect = mysql_connect($host, $username, $password);


	define('DB','internal_cfic');
	define('USER','internal_dds');
	define('PWD','db_user');

	$dbh = new PDO('mysql:host=localhost;dbname='.DB,USER,PWD);
	
if ($connect) {
	$select = mysql_select_db($db);
} else {
	echo "Failed Connection.";
}
	
	$table = $_POST['table'];
	$column = $_POST['column'];
	$id = $_POST['id'];
	$newValue = $_POST['new_val'];

	$sql = "UPDATE $table SET $column='$newValue' WHERE id=$id";
	
	$res = mysql_query($sql) or die("could not update " . mysql_error());
	
	//echo $sql; 
	
	//$response['success'] = $res;
	//$response['value'] = $newValue;
	//echo json_encode($_POST['new_val']);
	//echo json_encode($response);
?>