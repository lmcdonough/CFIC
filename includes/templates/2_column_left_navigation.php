
	
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

	<div class="container margin_left_none margin_right_none padding_none white_background" >

	
						<div class='margin_top_10 center'>
							<div class='row-fluid span12'>
								<a href="mailto:changenow@internalchange.com" target="_top"><i class='margin_right_15 color_888 zoom_12 pointer fa fa-envelope-o '> Email</i></a>
								<i id='bookmarkme' class='margin_right_15 color_888 zoom_12 pointer fa fa-heart '> Add to Favorites</i>							
								<i id='print_page' class='color_888 zoom_12 pointer fa fa-print '> Print</i>
							</div>
						</div>
		<div class='row-fluid margin_none padding_none' >		
				<div id='left_menu' class="span3 visible-desktop margin_bottom_none margin_left_20 padding_bottom_none background_F8 position_relative" >
					<h2 class='padding_top_2_percent margin_left_10'><?php echo $left_menu_heading ?></h2>
						<nav>
							<ul  class="" style='background-color:#F8F8F8;margin-left:0px;'>
								<?php 								
										$top_nav = mysql_query("SELECT * FROM template_2_left_menu_items WHERE page_id='$page_id'");
										$i=0;
										While($top_nav_item = mysql_fetch_array($top_nav)){		
										$top_nav_id = $top_nav_item['id'];						
										$top_nav_page_id = $top_nav_item['page_id'];	
										$top_nav_menu_item = $top_nav_item['menu_item'];
										$top_nav_link = $top_nav_item['link'];
										if($i == 0){											
											echo '<li class="position_relative" ><a href="' . $top_nav_link . '" id="blarrow" class="temp_2_active" style="color:#fff;padding-top:0px;padding-bottom:0px;padding-left:0px;" ><img id="blue_arrow" src="' . $dir . 'static/images/blue_arrow.png" style="position:static;z-index:1;height:40px;top:0px;margin-top:0px;margin-bottom:0px;"><span style="position:absolute;z-index:100;left:0px;margin-left:15px;height:40px;margin-top:10px;margin-bottom:0px;">' . $top_nav_menu_item . '</span></a></li>';
										}else{
											echo '<li><a href="' . $top_nav_link . '">' . $top_nav_menu_item . '</a></li>';
										};
										$i ++;					
									}							
								?>
							</ul>
						</nav>
				</div>
		
	<!-- end .sidebar1 -->
						
				<div  class='row-fluid'>						
					<div  id="leftNav" class='pull-left span9 white_background padding_left_30 min_height_460' >
						<h1 class='margin_top_none'><?php echo $main_heading ?></h1>
							<?php 
								foreach($items_center_array as $item_center){								
									echo '<h3>' . $item_center[0] . '</h3>';
									echo '<div>' . $item_center[1] . '</div>';									
									
								}								
							?>					
					</div>						
				</div>					
		</div>
	</div> 
	<script>
  //var windowWidth = $(window).width()

    //var wd= $('#leftNav').width();
	//alert(windowWidth);
	//alert(wd);
	//var diff = parseInt(windowWidth) - parseInt(wd);
	//alert(diff);
	//diff = parseInt(diff) - 90;
	//$('#blarrow').width(diff);
		  $( document ).ready(function() {
	var left_menu_width = $('#left_menu').width();
	$('#blarrow').css('width', '105%');
	$('#blue_arrow').css('width', '105%');
});
    </script>
  <!-- ending #container -->
 <!-- ending #content-body-->
 
 