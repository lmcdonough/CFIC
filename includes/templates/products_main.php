



<!-- End Header -->

<!-- BreadCrumbs -->
	<div class="margin_left_none margin_right_none locationDiv">
		<div class="margin_left_20 locationBlock container">
			<div class='row-fluid padding_bottom_1_percent' >
				<h1 class='hidden-phone'><?php echo $page_heading ?></h1>
				<div class='visible-phone nav_heading' ><?php echo $page_heading ?></div>
				<div class="breadcrumbs hidden-phone white_text">
					<a class="breadcrumb_link" href="<?php echo $dir ?>">Home</a> &gt; 
					<?php  
						if($type == ''){
						echo '<span class="breadcrumb_link">' . ucwords($temp) . '</span>';		
						}	
						else{
							echo '<a class="breadcrumb_link" href="' . $dir . $temp . '/">' . ucwords($temp) . '</a>';
						}
					?>					
					<?php  if($type != ''){
								echo '&gt; ';
								echo '<a class="last_breadcrumb">' . ucwords($type) . '</a>';
								
							} 
					?>
				</div>
			</div>
		</div>
	</div>		
<!-- End BreadCrumbs -->
<div class='container-fluid margin_left_none margin_right_none margin_bottom_10'>

<?php
  $query_category = ''; 
  $cat_id='99';
  $add_to_query = '';
  $app_id = '100';
 if($_POST["Paper"] !=''){
	$paper_param = ' AND paper=True ';
	$add_to_query = $add_to_query . $paper_param;
};
 
 if($_POST["Online"] !=''){
	$online_param = ' AND online=True ';
	$add_to_query = $add_to_query . $online_param;
};

 if($_POST["everything-disc"] !=''){
	$everything_disc_param = ' AND everything_disc=True ';
	$add_to_query = $add_to_query . $everything_disc_param;
};

 if($_POST["disc-classic"] !=''){
	$disc_classic_param = ' AND disc_classic=True ';
	$add_to_query = $add_to_query . $disc_classic_param;
};

 if($_POST["other-profiles"] !=''){
	$other_profiles_param = ' AND other_profiles=True ';
	$add_to_query = $add_to_query . $other_profiles_param;
};

 if($_POST["category"] !=''){
	$query_category = $_POST["category"];
	$query = mysql_query("SELECT * FROM product_categories WHERE value='$query_category'");		
	While($row = mysql_fetch_array($query)){
		$cat_id = "$row[id]";		
	};
	
 };

$query_category_post = $_POST["category"];

$app_join_param = '';
$app_query = '';		
 if($_POST["application"] !='100'){
	$query_app = $_POST["application"];
 	$query = mysql_query("SELECT * FROM product_applications WHERE value='$query_app'");		
	While($row = mysql_fetch_array($query)){
		$app_id = "$row[id]";		
	};
	$app_join_param = 'INNER JOIN product_application_associations ON products.id=product_application_associations.product_id';
	$app_query = 'AND product_application_associations.application_id=' . $app_id;
};
	
if($cat_id=='99' && $app_id == '100' && isset($_POST['post_exists'])){		
	$add_to_query = preg_replace("/AND/", "", $add_to_query, 1);
	}
	
?>
	
	<div class='row-fluid'>		
		<div class='background_F8 margin_top_20 padding_left_20 span2'>
			<h3 style='margin-bottom:0px;'>Category</h3>
			<form id='select_products_form'  method="post">	
			<div class='product_desktop'>
				<input class='submit_form float_left margin_right_5 desktop_category' <?php if($cat_id == '99'){ echo 'checked="checked"';};  ?> type="radio" value="99" name="category" > <div class='margin_bottom_5 font_size_16'>All Categories</div></input>
			<?php

			$query = mysql_query("SELECT * FROM product_categories");			
			While($row = mysql_fetch_array($query)){
					$name = "$row[name]";
					$value = "$row[value]";
					echo '<input class="submit_form float_left margin_right_5" ';
					if($query_category == $value){
						echo 'checked="checked"';
					};
					echo 'type="radio" value="'. $value . '" name="category" > <div class="margin_bottom_5 font_size_16" > ' . $name . '</div></input>';
			}
			?>
			</div>
			<div class='product_mobile'>
				<select class="submt_form_mobile" name='category'>
				<option class='submit_form mobile_category' <?php if($cat_id == '99'){ echo 'selected="selected"';};  ?> style="" value="99" name="category" >All Categories</option>
			<?php

			$query = mysql_query("SELECT * FROM product_categories");			
			While($row = mysql_fetch_array($query)){
					$name = "$row[name]";
					$value = "$row[value]";
					echo '<option class="submit_form" ';
					if($query_category == $value){
						echo 'selected="selected"';
					};
					echo ' value="'. $value . '" name="category" >' . $name . '</option>';
			}
			?>	
			</select>
			</div>
			<h3 style='margin-bottom:0px;' class='margin_top_10 '>Application</h3>
			<div class='product_desktop'>
				<input class='submit_form float_left margin_right_5 desktop_category' <?php if($app_id == '100'){ echo 'checked="checked"';};  ?> type="radio" value="100" name="application" > <div class="margin_bottom_5 font_size_16" >All Applications</div></input>
			<?php

			$query = mysql_query("SELECT * FROM product_applications");			
			While($row = mysql_fetch_array($query)){
					$name = "$row[name]";
					$value = "$row[value]";
					echo '<input class="submit_form float_left margin_right_5" ';
					if($query_app == $value){
						echo 'checked="checked"';
					};
					echo 'type="radio" value="'. $value . '" name="application" > <div class="margin_bottom_5 font_size_16" > ' . $name . '</div></input>';
			}
			?>
			</div>
			<div class='product_mobile'>
			<select class="submt_form_mobile" name='application'>
				<option class='submit_form mobile_category' <?php if($app_id == '100'){ echo 'selected="selected"';};  ?> value="100" name="application" >All Applications</option>
			<?php

			$query = mysql_query("SELECT * FROM product_applications");			
			While($row = mysql_fetch_array($query)){
					$name = "$row[name]";
					$value = "$row[value]";
					echo '<option class="submit_form" ';
					if($query_app == $value){
						echo 'selected="selected"';
					};
					echo ' value="'. $value . '" name="application" >' . $name . '</option>';
			}
			?>
			</select>
			</div>
			<h3 style='margin-bottom:0px;' class="margin_top_10" >Formats</h3>
			<?php

			$query = mysql_query("SELECT * FROM product_formats");		
			While($row = mysql_fetch_array($query)){
					$name = "$row[name]";					
					echo '<input class="submit_form float_left margin_right_5" ';
						if($_POST[$name] == True){
							
							echo ' checked="checked" ';
						};
					echo ' type="checkbox" value="'. $name . '" name="' . $name . '" > <div class="margin_bottom_5 font_size_16" > ' . $name . '</div></input>';
			}
			?>		
			
			<h3 style='margin-bottom:0px;' class='margin_top_10' >Profiling Family</h3>
			<?php

			$query = mysql_query("SELECT * FROM products_profiling");		
			While($row = mysql_fetch_array($query)){
					$profile = "$row[name]";
					$value = "$row[value]";
					echo '<input class="submit_form float_left margin_right_5" ';
						if($_POST[$value] == True){
							echo ' checked="checked" ';
						};					
					echo ' type="checkbox" value="'. $value . '" name="' . $value . '" > <div class="margin_bottom_5 font_size_16" > ' . $profile . '</div></input>';
			}
			?>	
				<input id='submit_form_button' style='display:none;' type='submit'></input>	
				<input type='hidden' name='post_exists'></input>
			</form>
		</div>
		<div class='span10'>
			<h1 class='margin_bottom_20'>Products</h1>
			<div class='row-fluid'>
			<?php
	
			if(isset($_POST['post_exists'])){	
				if($_POST['category'] != '99'){				
				$query = mysql_query("SELECT DISTINCT * FROM products INNER JOIN product_category_associations ON products.id=product_category_associations.product_id $app_join_param WHERE product_category_associations.category_id='$cat_id' $add_to_query $app_query");	
				}else{
					if($_POST['application'] != '100'){						
						$app_query = preg_replace("/AND/", "", $app_query, 1);
						$no_cat_query = "SELECT DISTINCT * FROM products $app_join_param WHERE $app_query $add_to_query";						
					}else{
						if($add_to_query != ''){							
							$no_cat_query = "SELECT DISTINCT * FROM products WHERE $add_to_query";
							$no_cat_query = preg_replace("/AND/", "", $no_cat_query, 1);
						}else{							
							$no_cat_query = 'SELECT * FROM products';
						}				
					}				
					
					$query = mysql_query($no_cat_query);				
				}
			}else{				
				$query = mysql_query("SELECT * FROM products");
			}
							
			$i = 1;
			While($row = mysql_fetch_array($query)){
					$heading = "$row[heading]";
					$image = "$row[image]";
					$description = "$row[description]";
					$price = "$row[price]";
					$link = "$row[link]";
					
					echo "	<div class='span3' ";
						$columns = 5;
						$remainder = fmod($i,$columns);
						if($remainder == 0){
							echo " style='margin-left:0px;' ";
						}
						
						echo " >	<img  class='max_width_200 max_height_200 span4 pointer' src='" . $dir . '/static/images/' . $image . "'>
								<div class='span8'>
									<h4 class='pointer product-header'><a class='blue-font' href='" . $link . "'>
										" . $heading . "
									</a></h4>
									<div>
										" . $description . "
									</div>
									<div class='bold'>
										" . $price . "
									</div>
								</div>
							</div>
					";
					$i++;
			}
			?>	
		
			</div>
		</div>
	</div>							
</div>
<!-- Start Footer -->	

<script>

		
</script>
