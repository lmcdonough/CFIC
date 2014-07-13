<?php
	//include 'header_admin.php'; 
session_start();
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
	$username = $_POST['username'];
	$password = $_POST['password'];
	$encrypted_password = md5($_POST['password']);
	//$sql = "UPDATE $table SET $column='$newValue' WHERE id=$id";
	$sql = "SELECT * FROM users WHERE username='$username'";
	$res = mysql_query($sql) or die("incorrect username or password " . mysql_error());
	$numrows = mysql_num_rows($res);
	
	if($numrows!=0){
		while ($row = mysql_fetch_assoc($res)){
			$dbusername = $row['username'];
			$dbpassword = $row['password'];	

			if($username==$dbusername&&$encrypted_password==$dbpassword){
				echo '1';				
				$_SESSION['username']=$dbusername;				
			}
			else{
				echo '0';
			}
		}
		
	}
	else{
		die("Incorrect username or password.");
	}
	//echo $sql; 
	
	//$response['success'] = $res;
	//$response['value'] = $newValue;
	//echo json_encode($_POST['new_val']);
	//echo json_encode($response);	

?>