
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
 <title>CFIC Admin</title>
  
<?php $dir = "/~internal/cic/"; ?> 

  <link href=<?php echo $dir . '/includes/templates/style/bootstrap.css' ?> rel="stylesheet">
  <link rel="stylesheet" href=<?php echo $dir . '/includes/templates/style/font-awesome.css' ?>> 
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <link rel="stylesheet" href=<?php echo $dir . '/includes/templates/style/jquery.cleditor.css' ?>> 
  <link href=<?php echo $dir . '/includes/templates/style/style.css' ?> rel="stylesheet">
  <link href=<?php echo $dir . '/includes/templates/style/widgets.css' ?> rel="stylesheet">
  <link rel="shortcut icon" href=<?php echo $dir . '/includes/templates/img/favicon/favicon.png' ?>>
	
	<!-- Admin Section -->
	
<!-- JS -->


<script src=<?php echo $dir . '/includes/templates/js/bootstrap.js' ?>></script> <!-- Bootstrap -->
<script src=<?php echo $dir . '/includes/templates/js/jquery-ui-1.9.2.custom.min.js' ?>></script> <!-- jQuery UI -->
<script src=<?php echo $dir . '/includes/templates/js/fullcalendar.min.js' ?>></script> <!-- Full Google Calendar - Calendar -->
<script src=<?php echo $dir . '/includes/templates/js/jquery.rateit.min.js' ?>></script> <!-- RateIt - Star rating -->
<script src=<?php echo $dir . '/includes/templates/js/jquery.prettyPhoto.js' ?>></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->

<script src=<?php echo $dir . '/includes/templates/js/excanvas.min.js' ?>></script>
<script src=<?php echo $dir . '/includes/templates/js/jquery.flot.js' ?>></script>
<script src=<?php echo $dir . '/includes/templates/js/jquery.flot.resize.js' ?>></script>
<script src=<?php echo $dir . '/includes/templates/js/jquery.flot.pie.js' ?>></script>
<script src=<?php echo $dir . '/includes/templates/js/jquery.flot.stack.js' ?>></script>
<script src=<?php echo $dir . '/includes/templates/js/datatables/js/jquery.dataTables.js' ?>></script>
<script src=<?php echo $dir . '/includes/templates/js/sparklines.js' ?>></script> <!-- Sparklines -->
<script src=<?php echo $dir . '/includes/templates/js/jquery.cleditor.min.js' ?>></script> <!-- CLEditor -->
<script src=<?php echo $dir . '/includes/templates/js/jquery.slimscroll.min.js' ?>></script> <!-- jQuery SlimScroll -->
<script src=<?php echo $dir . '/includes/templates/js/filter.js' ?>></script> <!-- Filter for support page -->
<script src=<?php echo $dir . '/includes/templates/js/custom.js' ?>></script> <!-- Custom codes -->	
	
	<!--  End Admin Section -->
	
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

<style>
	body{
		background-color:white;
	}
	
	.column01{
		border-right:1px solid #4DB8FF;
		height:200px;
	}
	.column02{
		border-right:1px solid #4DB8FF;
		height:200px;
	}
	.column03{
		border-right:1px solid #4DB8FF;
		height:200px;
	}
	.column04{
		border-right:1px solid #4DB8FF;
		height:200px;
	}
	.column05{		
		height:200px;
	}
	
.temp_2_active:hover{
	color:white;
}

.nav_hidden{
	display:none;
}

.nav_active{
	background-color:#ffd45f;
}

.second_list_item{
	color:#013295 !important;
	list-style-type: circle !important;
}


.list_bullet{
	float:left;
	text-decoration:none;
	margin-left:0px;
	margin-right:8px;
	padding:0px;
	width:3px;
	text-align:left;
	align:left;
}

.second_nav_hover:hover{
	text-decoration:underline !important;
	color:#B21212 !important;
}

.second_nav_toggle{
	
}

.phone_second_menu{
	
	background-color:#fde193x !important;
}

.phone_second_menu_link{
	color:white !important;
	
}

.pointer {
	cursor:pointer !important;

}

.dl-back{
	background-color:#ffd45fx !important;
	color:#B21212 !important;
}
.dl-back a{
	text-decoration:none !important;
	color:#B21212 !important;
}

.dl-submenu{	
	margin-left:0px; 
	padding-left:0px;
	list-style-type:circle !important;
}

.product-header:hover{
	text-decoration:underline;
}

.light_grey_background{
	background-color:#E8E8E8 ;
	
}

.last_breadcrumb{
	color:#FFF;
	text-decoration:none;	
	font-size:14px;
}

.last_breadcrumb:hover{
	color:#FFF;
	text-decoration:none;	
	cursor:text;
}

.breadcrumb_link{
	color:#FFF !important;
	font-size:14px;
}
</style>
</head>


				
