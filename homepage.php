

<style>
.cursor-pointer {
	cursor:pointer;
}
.nav-tabs > li.active > a {
	cursor:pointer !important;
	background-color: white;
	color:black;
	border-bottom:1px solid white !important;
	font-weight:bold;
}


.nav-tabs > li > a {
	border: 1px solid #E0E0E0 !important; 
	color: #5EBFDF;
	background-color: #F8F8F8 ;
	font-weight:bold;
}
.nav-tabs > li > a:hover {
	border-bottom: 1px solid #E0E0E0 !important;
	color: #5EBFDF;
	background-color:#F8F8F8  ;
}
.nav-tabs > li.active > a:hover {	
	background-color:#F8F8F8   !important;
}

.box_rotate {
     -moz-transform: rotate(-90deg);  /* FF3.5+ */
       -o-transform: rotate(-90deg);  /* Opera 10.5 */
  -webkit-transform: rotate(-90deg);  /* Saf3.1+, Chrome */
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
}

.center{
	text-align:center;
}
</style>

	
<!-- BreadCrumbs -->
	<div style='margin-left:0px; margin-right:0px;' class="locationDiv">
		<div style='margin-left:20px;'  class="locationBlock container">
			<div class='row-fluid' style='padding-bottom:1%;' >
				<h1><?php echo $page_heading ?></h1>
				<div class="breadcrumbs hidden-phone white_text">
					<a class="breadcrumb_link" href="<?php echo $dir ?>">Home</a> &gt; 
					<?php  
						if($type == ''){
						echo '<span class="breadcrumb_link">' . ucwords($temp) . '</span>';			
						}	
						else{
							echo '<a class="breadcrumb_link"  href="' . $dir . $temp . '/">' . ucwords($temp) . '</a>';
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

	<div class="container-fluid" style='margin-left:0px; margin-right:0px; padding:0%;'>
	<div class='row-fluid' style='margin:0%; padding:0%;'>
						
					<div style='' class=' container'>
						<div style='margin-top:10px;' class='container-fluid'>
							<div class='row-fluid span12'>
								<i style='margin-right:15px; color:#888888 ; zoom: 1.2;' class='pointer fa fa-envelope-o '> Email</i>
								<i style='margin-right:15px; color:#888888 ; zoom: 1.2;' class='pointer fa fa-heart '> Add to Favorites</i>
								<i style='color:#888888 ; zoom: 1.2;' class='pointer fa fa-print '> Print</i>
							</div>
						</div>
hello world
						<div style='margin-top:10px;' class='container-fluid'>
							<div class='row-fluid span12'>
								<h2 style='color:#022D95;'><?php echo $main_heading ?></h2>								
								<div style='font-size:16px;' class='row-fluid container'>								
									<?php echo $content1; ?>

								</div>
							</div>
						</div>
							
							<div class='container-fluid span12' style='border:1px solid #D8D8D8; margin-left:0px; margin-right:10px; background-color:white; padding-left:0px; padding-right:0px; margin-top:20px;'>
								<div style='' class=''>
									<div style='position:relative;' class='container row-fluid span8'>
										<div class='span12 slider_image' id='first_slider' style='position:relative; margin-left:40px;'>
											<h1 class='center blue-font' style='margin-top:20%;'><?php echo $content2; ?></h1>										
										</div>	
										<div class='slider_image' id='second_slider' style='display:none;'>
											<h1 class='center blue-font' style=''><?php echo $content8; ?></h1>
										</div>
										<div class='slider_image' id='third_slider' style='display:none;'>
											<h1 class='center blue-font' style=''><?php echo $content9; ?></h1>
										</div>
										<div class='slider_image' id='fourth_slider' style='display:none;'>
											<h1 class='center blue-font' style=''><?php echo $content10; ?></h1>
										</div>
									</div>
									<div style='border-left:1px solid #D8D8D8; padding:0px;'  class='span4'>
										<div class='light_grey_background slider_category pointer' data-id='first_slider' style='border-bottom:1px solid #D8D8D8; margin-top:0px; padding-top:5px; margin-bottom:0px;'>
											<?php echo $content4; ?>
										</div>
										<div class='slider_category pointer' data-id='second_slider' style='border-bottom:1px solid #D8D8D8; padding-top:5px; padding-bottom:0px;'>
											<?php echo $content5; ?>
										</div>
										<div class='slider_category pointer' data-id='third_slider' style='border-bottom:1px solid #D8D8D8; padding-top:5px; padding-bottom:0px;'>
											<?php echo $content6; ?>
										</div>
										<div class='slider_category pointer' data-id='fourth_slider' style='padding-top:5px; padding-bottom:0px; margin-bottom:0px; height:100%;'>
											<?php echo $content7; ?>
										</div>								
									</div>
								</div>
							</div>
						</div>
					<div class='container' style='background-color:white; '>				
						<div class='span8' style='margin-left:0px; background-color:white; padding-top:10px;; min-height: 460px;'>						
							<div style='margin-bottom:20px; margin-left:10px;'>
								<h3 class='blue-font'><?php echo $content11; ?></h3>
								<p><?php echo $content12; ?></p>
							</div>
							<div style='margin-bottom:20px; margin-left:10px;'>
								<h3 class='blue-font'><?php echo $content13; ?></h3>
								<p><?php echo $content14; ?></p>
							</div>	
							<div style='font-size:16px; padding:12px; cursor:pointer; margin-left:10px;' class='badge badge-info'><?php echo $content15; ?></div>
							<div style='margin-top:20px; margin-left:10px;'>
								<h3 class='blue-font'>Latest from the blog.</h3>
								<ul>
									<li class='pointer' style='margin-top:8px;'><span style='color:#27d0e6;'><?php echo $content16; ?></span></li>
									<li class='pointer' style='margin-top:8px;'><span style='color:#27d0e6;'><?php echo $content17; ?></span></li>
									<li class='pointer' style='margin-top:8px;'><span style='color:#27d0e6;'><?php echo $content18; ?></span></li>
									<li class='pointer' style='margin-top:8px;'><span style='color:#27d0e6;'><?php echo $content19; ?></span></li>
								</ul>
							</div>
						</div>
						<div class='span4' style='padding-top:10px;'>							
							<h3 class='blue-font'>Popular Products</h3>
							<div class='span12 container' style='border:1px solid #D8D8D8; padding:8px; margin-left:0px; margin-top:5px; margin-bottom:5px;'>
								<div class='span8'>
									<h4 style='color:#27d0e6;'><?php echo $content20; ?></h4>
									<p><?php echo $content21; ?></p>
								</div>
								<img class='span4' style='max-width:100px;' src=<?php echo $dir . '/static/images/' . $content26; ?>></img>
							</div>
							<div class='span12 container' style='border:1px solid #D8D8D8; padding:8px; margin-left:0px; margin-top:5px; margin-bottom:5px;'>
								<div class='span8'>
									<h4 style='color:#27d0e6;'><?php echo $content22; ?></h4>
									<p><?php echo $content23; ?></p>
								</div>
								<img class='span4' style='max-width:100px;' src=<?php echo $dir . '/static/images/' . $content27; ?>></img>
							</div>
							<div class='span12 container' style='border:1px solid #D8D8D8; padding:8px; margin-left:0px; margin-top:5px; margin-bottom:5px;'>
								<div class='span8'>
									<h4 style='color:#27d0e6;'><?php echo $content24; ?></h4>
									<p><?php echo $content25; ?></p>
								</div>
								<img class='span4' style='max-width:100px;' src=<?php echo $dir . '/static/images/' . $content28; ?>></img>
							</div>							
						</div>
						<p style='margin-top:20px; font-size:15px; margin-left:0px; margin-bottom:40px;' class='row-fluid span12'><?php echo $content26; ?></p>		
					</div>
	</div> 
	</div>
	
  <!-- ending #container -->
 <!-- ending #content-body-->
 

  