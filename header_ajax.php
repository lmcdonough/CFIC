
  
<?php $dir = "/~internal/cic/"; ?> 


<?php 

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

$header_phone = mysql_query("SELECT * FROM header_phone_number");
While($header_phone_array = mysql_fetch_array($header_phone)){
	$phone = $header_phone_array['phone_number'];
}


$top_footer = mysql_query("SELECT * FROM footer_top");
$bottom_footer = mysql_query("SELECT * FROM footer_bottom_columns");

$dir = "/~internal/cic/";
$nav_top = '0';
$top_nav = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_top' ");
$top_nav_phone = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_top' ORDER BY 'order' ASC");
$nav_bottom = '1';
$bottom_nav = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_bottom'");
$sub_nav_phone = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_bottom'");
//$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
$nav_active = $_GET['id'] . '/';
$nav_active_sub = $type = $_GET['type'] . '/';
?>	



				
