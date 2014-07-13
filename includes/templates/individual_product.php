	
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

	<div class="container-fluid margin_left_none margin_right_none padding_none" >		
	<div class='row-fluid margin_none padding_none' >		
						
					<div class='row-fluid'>
						<div class='margin_top_10 padding_left_none container-fluid'>
							<div class='row-fluid '>
								<a href="mailto:changenow@internalchange.com" target="_top"><i class='margin_right_15 color_888 zoom_12 pointer fa fa-envelope-o '> Email</i></a>
								<i id='bookmarkme' class='margin_right_15 color_888 zoom_12 pointer fa fa-heart '> Add to Favorites</i>							
								<i id='print_page' class='color_888 zoom_12 pointer fa fa-print '> Print</i>
							</div>
						</div>
							<div class='container-fluid border_radius_10 border_grey margin_right_10 white_background padding_left_30 padding_top_07_percent padding_right_30 margin_top_20' >
								<h2><?php echo $main_heading ?></h2>								
								<h3 class='row-fluid span12'>
									<?php echo $content1; ?>
								</h3>
								<div class='row-fluid span12 font_size_16'>
									<?php  echo $content2; ?>
								</div>
								<div class='margin_top_10 margin_bottom_10 padding_top_10 row-fluid span12 margin_left_none'>
									<div class='right_grey_border span8'>
										<img class='margin_top_10 span3 max_width_300' src=<?php echo $dir . '/static/images/' . $content3 ?>>
										<div class='span1'>&nbsp;</div>									
										<div class='span8 margin_top_10 margin_left_10 margin_bottom_10 ' >
											<div>
											<?php  echo $content4;  ?>
											</div>
										</div>
									</div>
									<div class='margin_top_10 margin_bottom_10 span4'>
										<?php echo $content13 ?>
									</div>
								</div>
							</div>
						</div>
					<div class=''>								
						<div class='span8 margin_left_10 background_white padding_top_07_percent min_height_460 padding_right_20' >						
							<!-- Items center was here -->												
							<div id="tabs" class='span12 margin_top_30 margin_left_none margin_bottom_40' >
								<ul style='margin-bottom:0px;' class="nav nav-tabs tab-list margin_bottom_none border_bottom_none">
									<li id='tab-1' class="active custom-tab-select" >
										<a class='cursor-pointer everything-id font_size_16'><?php echo $content12 ?></a>
									</li>
									<?php if($content8 != ''){
									echo "<li id='tab-2' class='custom-tab-select'>
										<a class='cursor-pointer classic-id font_size_16'>" . $content8 . "</a>
									</li>";
									}?>
									<?php if($content10 != ''){
									echo "<li id='tab-3' class='custom-tab-select'>
										<a class='cursor-pointer classic-id font_size_16'>" . $content10 . "</a>
									</li>";
									}?>								
								</ul>
								<div class='border_grey margin_bottom_10 padding_10' id='tab-content'>
									<div class='tab-1'>
										<?php echo  $content7; ?>
									</div>
									<?php if ($content8 != ''){ 
									echo "<div class='tab-2' style='display:none;'>" . $content9 . "</div>";
									}
									?>
									<?php if ($content10 != ''){ 
									echo "<div class='tab-3' style='display:none;'>" . $content11 . "</div>";
									}
									?>
								</div>							
						</div>	
							<p class='font_size_16'> 
								<?php echo $content6;  ?>
							</p>
						
						</div>
						<div class='span4 center margin_top_30 individual_product_right_column' style='background-image:url("<?php echo $dir . 'static/images/gray_footer.png'; ?>"); '>						

							<div class='span8'>
							<h2 class='margin_left_10'><?php echo $right_menu_heading ?></h2><br><br>
								<?php 
									foreach($items_right_array as $item_right){								
										echo '<a class="text_decoration_none" href="' . $item_right[2] . '"><img class="width_150" src="' . $dir . 'static/images/' . $item_right[1] . '">';
										echo '<h3>' . $item_right[0] . '</h3></a><br><br>';									
										
									}								
								?>							
		
							</div>
						</div>	
					</div>
				</div> 
			</div>
	
  <!-- ending #container -->
 <!-- ending #content-body-->
 

  