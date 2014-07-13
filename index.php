
<?php

$temp = $_GET['id'];
$type = $_GET['type'];
$num = $_GET['num'];

if($temp != 'admin' || $temp != 'ajax'){
 include 'header.php'; 
 }
if($temp == 'ajax'){
 include 'header_ajax.php'; 
 }
 if($temp == 'admin'){
	 include 'header_admin.php'; 
 };
 
 ?>

<?php 

$temp = $_GET['id'];
$type = $_GET['type'];
$num = $_GET['num'];
$query_place = $temp;

if ($type != ''){
	$query_place = $type;
	}
elseif ($num != '') {
	$query_place = $num;
}


$dir = "/~internal/cic/";
$query = mysql_query("SELECT * FROM content WHERE page_id='$temp' AND page_num='$type' AND page_type='$num'");
//$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
While($row = mysql_fetch_array($query)){
		$content1 = "$row[content_1]";
		$content2 = "$row[content_2]";		
		$content3 = "$row[content_3]";
		$content4 = "$row[content_4]";
		$content5 = "$row[content_5]";
		$content6 = "$row[content_6]";
		$content7 = "$row[content_7]";
		$content8 = "$row[content_8]";
		$content9 = "$row[content_9]";
		$content10 = "$row[content_10]";
		$content11 = "$row[content_11]";
		$content12 = "$row[content_12]";
		$content13 = "$row[content_13]";
		$content14 = "$row[content_14]";
		$content15 = "$row[content_15]";
		$content16 = "$row[content_16]";
		$content17 = "$row[content_17]";
		$content18 = "$row[content_18]";
		$content19 = "$row[content_19]";
		$content20 = "$row[content_20]";
		$content21 = "$row[content_21]";
		$content22 = "$row[content_22]";
		$content23 = "$row[content_23]";
		$content24 = "$row[content_24]";
		$content25 = "$row[content_25]";
		$content26 = "$row[content_26]";
		$content27 = "$row[content_27]";
		$content28 = "$row[content_28]";
		$content29 = "$row[content_29]";
		$content30 = "$row[content_30]";
		$content31 = "$row[content_31]";
		$content32 = "$row[content_32]";
		$content33 = "$row[content_33]";
		$content34 = "$row[content_34]";
		$content35 = "$row[content_35]";
		$content36 = "$row[content_36]";
		$content37 = "$row[content_37]";
		$content38 = "$row[content_38]";
		$content39 = "$row[content_39]";
		$content40 = "$row[content_40]";
		$content41 = "$row[content_41]";
		$content42 = "$row[content_42]";
		$content43 = "$row[content_43]";
		$content44 = "$row[content_44]";
		$content45 = "$row[content_45]";
		$content46 = "$row[content_46]";
		$content47 = "$row[content_47]";
		$title = "$row[title]";
		$description = "$row[description]";		
		$template = "$row[template]";
		$page_heading = "$row[page_heading]";
		$main_heading = "$row[main_menu_heading]";
		$left_menu_heading = "$row[left_menu_heading]";
		$right_menu_heading = "$row[right_menu_heading]";
		
			global $page_id;
			$page_id = "$row[id]";
			$top_footer = mysql_query("SELECT * FROM footer_top WHERE page_id='$page_id'");
			$query_left = mysql_query("SELECT * FROM template_2_left_menu_items WHERE page_id='$page_id'");
			$items_left_test = array();
			While($row_left = mysql_fetch_array($query_left)){
				$items_left = "$row_left[menu_item]";			
				array_push($items_left_test, $items_left);
				}
			
			$query_right = mysql_query("SELECT * FROM right_menu_items WHERE page_id='$page_id'");	
			$items_right_array = array();			
			While($row_right = mysql_fetch_array($query_right)){
				$item_right_array_each = array();
				$item_right_heading = "$row_right[item_heading]";		
				$item_right_content = "$row_right[item_content]";
				array_push($item_right_array_each, $item_right_heading);
				array_push($item_right_array_each, $item_right_content);
				array_push($items_right_array, $item_right_array_each);
				
				}

			$query_center = mysql_query("SELECT * FROM main_menu_items WHERE page_id='$page_id'");	
			$items_center_array = array();			
			While($row_center = mysql_fetch_array($query_center)){
				$item_center_array_each = array();
				$item_center_heading = "$row_center[item_heading]";		
				$item_center_content = "$row_center[item_content]";
				array_push($item_center_array_each, $item_center_heading);
				array_push($item_center_array_each, $item_center_content);
				array_push($items_center_array, $item_center_array_each);
				
				}
				
			$query_tab = mysql_query("SELECT * FROM tabs WHERE page_id='$page_id'");
			While($row_tab = mysql_fetch_array($query_tab)){				
					$tab_1_heading = "$row_tab[tab_one_heading]";
					$tab_1_content_heading = "$row_tab[tab_one_content_heading]";
					$tab_1_content = "$row_tab[tab_one_content]";
					$tab_2_heading = "$row_tab[tab_two_heading]";
					$tab_2_content_heading = "$row_tab[tab_two_content_heading]";
					$tab_2_content = "$row_tab[tab_two_content]";
					$tab_3_heading = "$row_tab[tab_three_heading]";
					$tab_3_content_heading = "$row_tab[tab_three_content_heading]";
					$tab_3_content = "$row_tab[tab_three_content]";					
				}				

	}


//$temp = $content1['template'];
//$temp = 'template_1.php';
//echo $content1;

//if($temp !='')
//{
echo '<title>' . $title . '</title>';
echo '<meta name="description" content="' . $description . '" />';
include('includes/templates/'.$template);
//}else
//{
//echo 'Please associate a template with the URL.';	
//}
?>  


 <?php
 
 if($temp != 'admin'){
 include 'footer.php'; 
 };

 ?>
 