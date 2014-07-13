<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="description" content="">-->
    <meta name="author" content="">
 
  <!--<title>Center for Internal Change</title>-->
  
<?php $dir = "/~internal/cic/"; ?> 

    <script src=<?php echo $dir . '/static/js/jquery.js' ?> type="text/javascript"></script>
	<link href=<?php echo $dir . '/static/css/style.css' ?> type="text/css" rel="stylesheet" media="all" />
	<link href=<?php echo $dir . '/static/bootstrap/css/bootstrap.css' ?> rel="stylesheet" media="all" />
	<link href=<?php echo $dir . '/static/bootstrap/css/bootstrap-responsive.css' ?> rel="stylesheet" media="all" />
	<link href=<?php echo $dir . '/static/bootstrap/css/font-awesome.css' ?> rel="stylesheet" media="all" />
	<link href=<?php echo $dir . '/static/font-awesome/css/font-awesome-4.min.css' ?> rel="stylesheet" media="all" />

	<link media="all" rel="stylesheet" href=<?php echo $dir . '/static/slick_nav/slicknav.css' ?> />
	<script src=<?php echo $dir . '/static/slick_nav/jquery.slicknav.min.js' ?>></script>
	<script src=<?php echo $dir . '/static/slick_nav/modernizr.js' ?>></script>
	<link rel="stylesheet" media='all' href=<?php echo $dir . '/static/css/styleCFIC.css' ?> />
	  
   
	<link href=<?php echo $dir . '/static/css/style.css' ?> type="text/css" rel="stylesheet" media="print" />
	<link href=<?php echo $dir . '/static/bootstrap/css/bootstrap.css' ?> rel="stylesheet" media="print" />
	<link href=<?php echo $dir . '/static/bootstrap/css/bootstrap-responsive.css' ?> rel="stylesheet" media="print" />
	<link href=<?php echo $dir . '/static/bootstrap/css/font-awesome.css' ?> rel="stylesheet" media="print" />
	<link href=<?php echo $dir . '/static/font-awesome/css/font-awesome-4.min.css' ?> rel="stylesheet" media="print" />

	<link rel="stylesheet" href=<?php echo $dir . '/static/slick_nav/slicknav.css' ?> media="print" />
	<link rel="stylesheet" media='all' href=<?php echo $dir . '/static/css/styleCFIC.css' ?> media="print" />
	<!-- Admin Section -->
	
	
	<!--  End Admin Section -->
	
<?php 

$host = "localhost";
$username = "internal_dds";
$password = "db_user";
$db = "internal_cfic";

$connect = mysql_connect($host, $username, $password);

if ($connect) {
	$select = mysql_select_db($db);
} else {
	echo "Failed Connection.";
}

$header_phone = mysql_query("SELECT * FROM header_phone_number");
While($header_phone_array = mysql_fetch_array($header_phone)){
	$phone = $header_phone_array['phone_number'];
}



$bottom_footer = mysql_query("SELECT * FROM footer_bottom_columns");


$dir = "/~internal/cic/";
$nav_top = '0';
						
$top_nav = mysql_query("SELECT * FROM `navbar_top_level` WHERE `nav_id`=$nav_top ORDER BY `display_order` ASC");
$top_nav_phone = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_top' ORDER BY 'order' ASC");
$nav_bottom = '1';
$bottom_nav = mysql_query("SELECT * FROM `navbar_top_level` WHERE `nav_id`=$nav_bottom ORDER BY `display_order` ASC");

$sub_nav_phone = mysql_query("SELECT * FROM navbar_top_level WHERE nav_id='$nav_bottom'");
$sub_nav_phone_mobile = mysql_query("SELECT * FROM navbar_top_level");
//$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
$nav_active = $_GET['id'] . '/';
$nav_active_sub = $type = $_GET['type'] . '/';
?>	

</head>
<body>
<div class='navbar' style='margin-bottom:0%; margin-left:0px; margin-right:0px;'>
	<div class="utilDiv navbar-inner">
		<div class="utilBlock container">		   
				<!--<a style='margin:0.5%; margin-left:0px;' class="btn visible-phone pull-left btn-toggle-top"><i class="fa fa-bars"></i></a>-->
				<div style='padding-top:8px;' class='row-fluid'>
				  
					<div class="span4" style="padding-left:18px;">
						<i><?php echo $phone ?></i>
					</div>
					<div class="span6 offset2 hidden-phone">
						<ul class="" style='list-style-type:none; display:inline; margin-right:10px;'>
								<?php 
									$i = 1;
									While($top_nav_item = mysql_fetch_array($top_nav)){
										$top_nav_link = $top_nav_item['link'];
										$top_nav_name = $top_nav_item['name'];
										$top_nav_id = $top_nav_item['id'];
										$icon = $top_nav_item['icon'];
										$number = mysql_num_rows($top_nav);										
										
										if ($i == 1){
										echo '<li style="margin-right:10px;" class=" pull-right dropdown settings-toggle float-left white-text"><a style="text-decoration:none;" class=" white-text dropdown-toggle url" data-toggle="dropdown" href="';
											if(substr($top_nav_link, 0, 4) == "http"){
											echo $top_nav_link . '" >';											
											}
											else{
												echo $dir . $top_nav_link . '" >';
											} 
										if ($icon != ''){	
												echo '<i style="zoom:1.3; margin-right:5px;" class="pull-left fa ' . $icon . '"></i> ';
										}
										echo $top_nav_name . '</a>';
										}
										else{
											echo '<li class=" pull-right dropdown settings-toggle float-left white-text"><a style="text-decoration:none;" class=" white-text dropdown-toggle url" data-toggle="dropdown" href="';
											if(substr($top_nav_link, 0, 4) == "http"){
											echo $top_nav_link . '" >';
											}
											else{												
												echo $dir . $top_nav_link . '" >';
											}
											if ($icon != ''){	
												echo '<i style="zoom:1.3; margin-right:5px;" class="pull-left fa ' . $icon . '"></i> ';
											}											
											echo $top_nav_name . '</a>';
										}
										$top_sub_nav = mysql_query("SELECT * FROM navbar_sub_level WHERE top_id='$top_nav_id'");
										 
										if (mysql_num_rows($top_sub_nav) > 0){ 
											echo '<ul class="navbar_dropdown_ul dropdown-menu settings-menu">';
											While($sub_nav_item = mysql_fetch_array($top_sub_nav)){
												$sub_nav_link = $sub_nav_item['link'];
												$sub_nav_name = $sub_nav_item['name'];
												echo '<li><a class="text_decoration_none" style="color: #0D2D9B !important;" href="';
												
											if(substr($sub_nav_link, 0, 4) == "http"){
											echo $sub_nav_link;
											}
											else{												
												echo $dir . $top_nav_link . $sub_nav_link;
											}
											echo '">' . $sub_nav_name . '</a>';
											}
											echo '</li></ul>';
										}
										echo '</li>';
										
										if ($i < $number){
											echo '<li class="pull-right float-left hidden-phone"><a class="white_always" >|</a></li>';
											}	
										$i ++;											
									}
								?>
				
						</ul> 
				  	</div>
				  
				</div>
				<div style='display:none; color:white;' class="span6 top-nav-toggle phone-only">
					<ul style='list-style-type:none;' >
						<?php							
							While($top_nav_item_phone = mysql_fetch_array($top_nav_phone)){
								$top_nav_link_phone = $top_nav_item_phone['link'];
								$top_nav_name_phone = $top_nav_item_phone['name'];
								$top_nav_id_phone = $top_nav_item_phone['id'];
								echo '<li class="white-text"><a class="white-text" href="';
								echo $dir . $top_nav_link_phone . '" >' . $top_nav_name_phone . '</a>';
								
								$top_phone_sub_nav = mysql_query("SELECT * FROM navbar_sub_level WHERE top_id='$top_nav_id_phone'");
								echo '<ul style="list-style-type:none;" class="">';
								While($sub_phone_nav_item = mysql_fetch_array($top_phone_sub_nav)){
												$sub_nav_link = $sub_phone_nav_item['link'];
												$sub_nav_name_phone = $sub_phone_nav_item['name'];
									echo '<li><a style="text-decoration:none;" href="' . $dir . $top_nav_link_phone . $sub_nav_link . '">' . $sub_nav_name_phone . '</a></li>';
								};
								echo '</ul>';
								echo '</li>';
							}
										
						?>
			
					</ul> 
				</div>
		</div>
	</div>	
</div>		<!-- Add "-fluid" to container class to extend to edges of web page; -->
<div class='container-fluid' style='margin-top:0%; margin-left:0px;'>
	<!-- old button went here -->	
	<div class='row-fluid nav_hidden second_nav_desktop' style='margin-top:0%; margin-left:0%;'>
		<div class='' style='margin-bottom:1%;'>
		<div style='padding-bottom:1%; margin-left:0px;' class="logo"> <a href="<?php echo $dir ?>"><img style='margin-left:0px; padding-left:0px;' src="<?php echo $dir . 'static/images/CFIC-logo.png' ?>" width="150" height="125" /></a></div>	
			<div style=' text-align:right;' class='pull-right'>
				<ul style='' class="span12 pull-right primaryNav">
					<?php 
						$i = 1;
						While($bottom_nav_item = mysql_fetch_array($bottom_nav)){
							$bottom_nav_link = $bottom_nav_item['link'];
							$bottom_nav_name = $bottom_nav_item['name'];
							$bottom_nav_id = $bottom_nav_item['id'];
							
							if ($i == 1){
								echo '<li style="margin-left:10px;" id="where" class="dropdown settings-toggle pointer ';
								if($bottom_nav_link==$nav_active){
								echo ' nav_active ';
								}
								echo '">';								
								echo '<a class="dropdown-toggle url" data-toggle="dropdown" href="';
								if(substr($bottom_nav_link, 0, 4) == "http"){
									echo $bottom_nav_link . '" >' . $bottom_nav_name . '</a>';
								}
								else{
								echo $dir . $bottom_nav_link . '" >' . $bottom_nav_name . '</a>';
								}
							}
							else {
								echo '<li id="where" class="dropdown settings-toggle pointer ';
								if($bottom_nav_link==$nav_active){
									echo ' nav_active ';
								}								
								echo '">';								
								echo '<a class="second_nav_toggle dropdown-toggle url" data-toggle="dropdown" href="';
								if(substr($bottom_nav_link, 0, 4) == "http"){
								echo $bottom_nav_link . '" >' . $bottom_nav_name . '</a>';	
								}
								else{
									echo $dir . $bottom_nav_link . '" >' . $bottom_nav_name . '</a>';
								}
							}							
							$bottom_sub_nav = mysql_query("SELECT * FROM `navbar_sub_level` WHERE `top_id`=$bottom_nav_id ORDER BY `display_order` ASC");
														
							if (mysql_num_rows($bottom_sub_nav) > 0){ 
								echo '<ul class="navbar_dropdown_ul dropdown-menu settings-menu">';
								While($sub_nav_item = mysql_fetch_array($bottom_sub_nav)){
									$sub_nav_link = $sub_nav_item['link'];
									$sub_nav_name = $sub_nav_item['name'];
									echo '<li class=" span12 ';
									if($sub_nav_link==$nav_active_sub){
										echo ' nav_active" ';									
									}	
									echo '"';
									echo '" style="text-align:left; margin-left:0px; padding-left:0px; border:none; padding-right:16px; ">';
									echo '<a class="second_list_item second_nav_hover"';
									
									echo '" style="margin-left:0px;" href="';
									if(substr($sub_nav_link, 0, 4) == "http"){
										echo $sub_nav_link . '"><div class="list_bullet">&#149;</div> ' . $sub_nav_name . '</a>';
									}
									else{
										echo $dir . $bottom_nav_link . $sub_nav_link . '"><div class="list_bullet">&#149;</div> ' . $sub_nav_name . '</a>';
									}
								}
								echo '</li></ul>';
							}
							echo '</li>';
							$i ++;
						}
					?>	
											
				</ul>
			</div>
		</div>
	</div>
	<div class='row-fluid second-nav-toggle nav_hidden second_nav_hidden' style=''>
		<div class='' style=''>
			<div id="second_nav_container" style='' class="second_nav_hidden">
				
					<!--<button style='background-color:#B21212 ;' class="dl-trigger ">Open Menu</button>-->
					<ul id='menu' style='margin-top:0%; border-right:0px;' class="phone_second_menu">
					
						<?php							
							While($sub_nav_item_phone = mysql_fetch_array($sub_nav_phone_mobile)){
								$top_nav_link_phone = $sub_nav_item_phone['link'];
								$top_nav_name_phone = $sub_nav_item_phone['name'];
								$top_nav_id_phone = $sub_nav_item_phone['id'];
								echo '<li style="" class=""><a class="';
								if($top_nav_link_phone==$nav_active){
									echo '';
								
								}
								
								echo '" href="';
								if(substr($top_nav_link_phone, 0, 4) == "http"){
									echo $top_nav_link_phone . '" >' . $top_nav_name_phone . '</a>';
								}
								else{
									echo $dir . $top_nav_link_phone . '" >' . $top_nav_name_phone . '</a>';
								}
								$bottom_phone_sub_nav = mysql_query("SELECT * FROM navbar_sub_level WHERE top_id='$top_nav_id_phone'");
								echo '<ul style="" class="">';
								While($sub_phone_nav_item = mysql_fetch_array($bottom_phone_sub_nav)){
												$sub_nav_link = $sub_phone_nav_item['link'];
												$sub_nav_name_phone = $sub_phone_nav_item['name'];
									echo '<li style="" class="">';									
									echo '<a ';
									if($sub_nav_link==$nav_active_sub){
										echo 'class=""';									
									}else{
										echo 'class="phone_second_menu_link"';
									}	
									echo ' style="" href="';
									if(substr($sub_nav_link, 0, 4) == "http"){
										echo $sub_nav_link . '">' . $sub_nav_name_phone . '</a></li>';
									}
									else{
										echo $dir . $top_nav_link_phone . $sub_nav_link . '">' . $sub_nav_name_phone . '</a></li>';
									}
								};
								echo '</ul>';
								echo '</li>';
							}
										
						?>
				</ul>
			</div>			
		</div>
		
	</div>	
	
</div>
				
