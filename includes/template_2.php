
	
	<div style='margin-left:10px; margin-right:10px;' class="locationDiv">
		<div style='margin-left:20px;'  class="locationBlock container">
			<div class='row-fluid' style='padding-bottom:1%;' >
				<h1><?php echo $page_heading ?></h1>
				<div class="breadcrumbs hidden-phone white_text">
					<a href="<?php echo $dir ?>">Home</a> &gt; 
					<a href="<?php echo $dir . $temp . '/' ?>"><?php echo $temp ?></a>
					<?php  if($type != ''){
								echo '&gt; ';
								echo '<a href="';
								echo $dir . $temp . '/' . $type . '/';
								echo '">' . $type . '</a>';
								
							} 
					?>
				</div>
			</div>
		</div>
	</div>	

	<div class="container-fluid" style='margin:0%; margin-left:10px; margin-right:10px; padding:0%; background-color:#F8F8F8;'>
		<!--<div class="row-fluid" style='background-color:#F0F0F0  ; margin-0%; padding:0%;'>
			<ul class="socialMedia span4 offset8" style='padding-bottom:0%; padding-top:0%; margin-bottom:0%;'>
				<li><a href="#" class="social-tw">twitter</a></li>
				<li><a href="#" class="social-go">google+</a></li>
				<li><a href="#" class="social-li">linkedin</a></li>
				<li><a href="#" class="social-fb">facebook</a></li>
			</ul>
		</div>-->
		
		<div class='row-fluid ' style='margin:0%; padding:0%;'>		
				<div class=" span3" style='margin-bottom:0%; padding-bottom:0%; '>
					<h3 class='blue-font' style='padding-top:2%; margin-left:20px;'><?php echo $left_menu_heading ?></h3>
						<nav>
							<ul style='margin-left:17px;'>
								<?php 
								$i= 0;
									foreach($items_left_test as $item){
										if($i == 0){
echo '<li style="width:100%;"><a href="#" class="temp_2_active" style="color:#fff;padding-top:0px;padding-bottom:0px;padding-left:0px;width:100%;" ><img src="' . $dir . 'static/images/blue_arrow.png" style="position:static;z-index:1;height:40px;top:0px;margin-top:0px;margin-bottom:0px;width:100%;">


<span style="position:absolute;z-index:100;left:0px;margin-left:40px;height:40px;margin-top:10px;margin-bottom:0px;>' . $item . '</span></a></li>';
										}else{
											echo '<li><a href="#">' . $item . '</a></li>';
										};
										$i ++;
									}								
								?>
							</ul>
						</nav>
				</div>
		
	<!-- end .sidebar1 -->
						
					<div class='row-fluid'>						
						<div class='pull-left span9' style='margin-left:-120px;background-color:white; padding-left:30px; padding-top:0.7%; min-height: 460px;'>
							<h3 style='color:#022D95; font-size:18pt;' class=''><?php echo $main_heading ?></h3>
								<?php 
									foreach($items_center_array as $item_center){								
										echo '<h5>' . $item_center[0] . '</h5>';
										echo '<p>' . $item_center[1] . '</p>';									
										
									}								
								?>					
						</div>
						
				</div>					
			</div>
		</div> 
	
  <!-- ending #container -->
 <!-- ending #content-body-->
 
 