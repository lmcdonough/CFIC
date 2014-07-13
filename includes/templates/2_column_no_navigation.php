



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

<div class='container-fluid margin_left_none margin_right_none margin_bottom_10 ' >
						<div class='margin_top_10'>
							<div class='row-fluid '>
								<a href="mailto:changenow@internalchange.com" target="_top"><i class='margin_right_15 color_888 zoom_12 pointer fa fa-envelope-o '> Email</i></a>
								<i id='bookmarkme' class='margin_right_15 color_888 zoom_12 pointer fa fa-heart '> Add to Favorites</i>							
								<i id='print_page' class='color_888 zoom_12 pointer fa fa-print '> Print</i>
							</div>
						</div>
	<div class='row-fluid'>
		<div class='span3 margin_top_20'>			
			<?php 
				foreach($items_center_array as $item_center){
					echo '<div class="margin_bottom_40">';
					echo '<h2>' . $item_center[0] . '</h2>';
					echo '<div>' .  $item_center[1] . '</div>';									
					echo '</div>';
				}								
			?>	
		</div>
		<div class='span9'>
			<?php echo '<h1 class="margin_bottom_40" >' . $right_menu_heading . '</h1>' ?>
			<?php 
				foreach($items_right_array as $item_right){	
					echo '<div class="margin_bottom_40">';
					echo '<h2>' . $item_right[0] . '</h2>';
					echo '<div>' . $item_right[1] . '</div>';	
					echo '</div>';					
				}								
			?>
		</div>
	</div>							
</div>
<!-- Start Footer -->	

