

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
	//$newValue = $_POST['new_val'];
	
	
	$sql = "INSERT INTO `$table` (`id`) VALUES (NULL)";
	$res = mysql_query($sql) or die("could not update " . mysql_error());
	$last_id = mysql_insert_id();

	$sql_2 = "UPDATE $table SET $column='$id' WHERE id=$last_id";
	$res_2 = mysql_query($sql_2) or die("could not update " . mysql_error());
	
	
	$response['success'] = $res;
	$response['last_id'] = $last_id;
	//echo json_encode($res);
	//echo json_encode($response);
	echo $last_id;
?>
