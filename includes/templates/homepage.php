

	
<!-- BreadCrumbs -->
	<div class="margin_left_none margin_right_none locationDiv">
		<div class="margin_left_20 locationBlock container">
			<div class='row-fluid padding_bottom_1_percent'>
				<h1 class='hidden-phone'><?php echo $page_heading ?></h1>
				<div class='visible-phone nav_heading' ><?php echo $page_heading ?></div>
				<div class="breadcrumbs hidden-phone white_text">
					<?php if($id != ''){
						echo '<a class="breadcrumb_link" href="' . $dir . '">Home</a> &gt; ';
					}
						if($id == ''){
							echo '<a class="breadcrumb_link cursor_default no_hover_underline" >Home</a>';
						}
					?>
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

	<div class="container-fluid margin_left_none margin_right_none padding_none margin_bottom_20" >
	<div class='row-fluid margin_none padding_none' >
						
					<div style='' class=' container'>
						<div class='margin_top_10'>
							<div class='row-fluid span12'>
								<a href="mailto:changenow@internalchange.com" target="_top"><i class='margin_right_15 color_888 zoom_12 pointer fa fa-envelope-o '> Email</i></a>
								<i id='bookmarkme' class='margin_right_15 color_888 zoom_12 pointer fa fa-heart '> Add to Favorites</i>							
								<i id='print_page' class='color_888 zoom_12 pointer fa fa-print '> Print</i>
	
							</div>
						</div>
					
						<div class='margin_top_10 padding_left_none margin_left_none container-fluid'>
							<div class='row-fluid span12'>
								<h1><?php echo $main_heading ?></h1>								
								<div class='font_size_16 row-fluid container'>								
									<?php echo $content1; ?>

								</div>
							</div>
						</div>
							
							<div class='container-fluid span12 border_grey margin_left_none margin_right_10 white_background padding_left_none padding_right_none margin_top_20' >
								<div class='padding_left_none padding_right_none margin_left_none margin_right_none row'>
									<div class='slider_content_area padding_top_5  padding_right_20 padding_left_20 container row-fluid span8'>
										<div class='span12 slider_image' id='first_slider' style='position:relative; '>
											<div class=' ' style=''><?php echo $content2; ?></div>										
										</div>	
										<div class='slider_image' id='second_slider' style='display:none;'>
											<div class=' ' style=''><?php echo $content8; ?></div>
										</div>
										<div class='slider_image' id='third_slider' style='display:none;'>
											<div class='' style=''><?php echo $content9; ?></div>
										</div>
										<div class='slider_image' id='fourth_slider' style='display:none;'>
											<div class='' style=''><?php echo $content10; ?></div>
										</div>
									</div>
									<div class='slider_descriptions padding_none margin_left_none margin_right_none left_grey_border span4'>
										<div class='first_slider_category slider_category light_grey_background bottom_grey_border pointer height_80 padding_left_5 padding_right_5 padding_top_5 padding_bottom_none margin_bottom_none' data-id='first_slider' >
											<?php echo $content4; ?>
										</div>
										<div class='slider_category bottom_grey_border pointer height_80 padding_left_5 padding_right_5 padding_top_5 padding_bottom_none margin_bottom_none' data-id='second_slider' >
											<?php echo $content5; ?>
										</div>
										<div class='slider_category bottom_grey_border pointer height_80 padding_left_5 padding_right_5 padding_top_5 padding_bottom_none margin_bottom_none' data-id='third_slider' >
											<?php echo $content6; ?>
										</div>
										<div class='slider_category pointer height_80 padding_left_5 padding_right_5 padding_top_5 padding_bottom_none margin_bottom_none' data-id='fourth_slider' >
											<?php echo $content7; ?>
										</div>								
									</div>
								</div>
							</div>
						</div>
					<div class='container white_background' >				
						<div class='span8 margin_left_none white_background padding_top_10 min_height_440' >							
							<div class='margin_top_20' >
								<h2><?php echo $content12; ?></h2>
								<ul>
									<li class='margin_top_8' ><span class='font_size_16'><?php echo $content16; ?></span></li>
									<?php 
										if($content17 != ''){
										echo "<li class='margin_top_8' ><span class='font_size_16'>" . $content17 . "</span></li>";
										}
										if($content18 != ''){
										echo "<li class='margin_top_8' ><span class='font_size_16'>" . $content18 . "</span></li>";
										}
										if($content19 != ''){
										echo "<li class='margin_top_8' ><span class='font_size_16'>" . $content19 . "</span></li>";
										}
										if($content11 != ''){
										echo "<li class='margin_top_8' ><span class='font_size_16'>" . $content11 . "</span></li>";
										}
									?>
								</ul>
							</div>
							<div class='margin_top_20 margin_bottom_40' >
								<div class='font_size_16'><?php echo  $content13;  ?></div>
							</div>
							<div class='margin_top_15' >
								<h2><?php echo $content29; ?></h2>
								<div class='neon_blue font_size_16' ><?php echo $content30; ?></div>
							</div>
							<div>
								<div class='row-fluid span9 border_grey margin_top_30 margin_left_none' >
									<h2 class='span8 margin_left_5' ><?php echo $content36; ?></h2>
									<img class='span1 pull-right width_40 margin_right_5 margin_top_5' src=<?php echo $dir . '/static/images/' . $content37; ?>>
									<div class='span5'>
										<ul>
											<?php if($content38 != ''){
											echo '<li class="margin_bottom_5 font_size_16">' . $content38 . '</li>';
											}
											?>
											<?php if($content39 != ''){
											echo '<li class="margin_bottom_5 font_size_16">' . $content39 . '</li>';	
											}
											?>
											<?php if($content40 != ''){
											echo '<li class="margin_bottom_5 font_size_16">' . $content40 . '</li>';
											}
											?>											
										</ul>
									</div>
									<div class='span6 margin_top_none' ><?php echo $content41;  ?></div>
								</div>
							</div>
							<div class='span12' style='margin-top:15px; margin-left:0px;' >								
								<div class='margin_top_40 font_size_16 margin_left_none margin_bottom_10' ><?php echo $content31; ?></div>
							</div>			
						</div>
					
						<!-- left off here -->
						<div class='span4' style='padding-top:10px;'>						
							<?php if($content21 != ''){
							echo "<h2 class='blue-font'>Popular Products</h2>
							<a href='" . $content32 . "' class='border_grey span12 container padding_8 margin_left_none margin_top_5 margin_bottom_5'>
								<div class='span8'>
									<h3 style='margin-bottom:0px;' class='padding_none margin_top_none margin_bottom_none'>" . $content20 . "</h3>
									<p>" . $content21 . "</p>
								</div>
								<img class='span4 max_width_100' src=" . $dir . '/static/images/' . $content26 . "></img>
							</a>";
							}
							?>
							<?php if($content23 != ''){
							echo "<a href='" . $content33 . "' class='border_grey span12 container padding_8 margin_left_none margin_top_5 margin_bottom_5'>
								<div class='span8'>
									<h3 style='margin-bottom:0px;' class='padding_none margin_top_none margin_bottom_none'>" . $content22 . "</h3>
									<p>" . $content23 . "</p>
								</div>
								<img class='span4 max_width_100' src=" . $dir . '/static/images/' . $content27 . "></img>
							</a>";
							}
							?>
							<?php if($content25 != ''){
							echo "<a href='" . $content34 . "' class='border_grey span12 container padding_8 margin_left_none margin_top_5 margin_bottom_5'>
								<div class='span8'>
									<h3 style='margin-bottom:0px;' class='padding_none margin_top_none margin_bottom_none'>" . $content24 . "</h3>
									<p>" . $content25 . "</p>
								</div>
								<img class='span4 max_width_100' src=" . $dir . '/static/images/' . $content28 . "></img>
							</a>";					
							}
						?>						
							
								<div class='span12 border_grey margin_left_none padding_none margin_top_5'>
									<h2 class='span9 margin_left_5'><?php echo $content42; ?></h2>
									<img class='span2 pull-right margin_right_5 margin_top_5 width_40' src=<?php echo $dir . '/static/images/' . $content43 ?>>
									<div class='margin_top_5 span11'>
										<ul>
											<?php if($content44 != ''){
											echo '<li class="margin_bottom_10"><span class="neon_blue margin_bottom_10 font_size_16">' . $content44 . '</span></li>';
											}
											?>
											<?php if($content45 != ''){
											echo '<li class="margin_bottom_10"><span class="neon_blue margin_bottom_10 font_size_16">' . $content45 . '</span></li>';	
											}
											?>
											<?php if($content46 != ''){
											echo '<li class="margin_bottom_10"><span class="neon_blue font_size_16 margin_bottom_10">' . $content46 . '</span></li>';
											}
											?>
										</ul>
									</div>									
								</div>
												
						</div>								
					</div>
	</div> 
	</div>
	
  <!-- ending #container -->
 <!-- ending #content-body-->
 

  