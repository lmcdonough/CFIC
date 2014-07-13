<!DOCTYPE html>
<html>
<head>

<style>
.cursor-pointer {
	cursor:pointer;
}
.nav-tabs > li.active > a {
	cursor:pointer !important;
	background-color: white;
	color:black;
	
}


.nav-tabs > li > a {
	border: 1px solid #E0E0E0 !important; 
	color: #0066FF;
	background-color: #F8F8F8;
}
.nav-tabs > li > a:hover {
	border-bottom: 1px solid #E0E0E0 !important;
	color: #0066FF;
	background-color:#F8F8F8;
}
.nav-tabs > li.active > a:hover {	
	background-color:#F8F8F8 ;
}
</style>

<?php include 'header.php'; ?>
	
	<div class="locationDiv">
		<div class="locationBlock container">
			<div class='row-fluid' style='padding-bottom:1%;' >
				<h1>Buy Products</h1>
				<div class="breadcrumbs hidden-phone white-text"><a href="/~internal/cic/">Home</a> &gt; <a href="/~internal/cic/case-studies.php">Case Studies</a></div>
			</div>
		</div>
	</div>	

	<div class="container-fluid" style='margin:0%; padding:0%; background-color:#F8F8F8;'>
		<!--<div class="row-fluid" style='background-color:#F0F0F0  ; margin-0%; padding:0%;'>
			<ul class="socialMedia span4 offset8" style='padding-bottom:0%; padding-top:0%; margin-bottom:0%;'>
				<li><a href="#" class="social-tw">twitter</a></li>
				<li><a href="#" class="social-go">google+</a></li>
				<li><a href="#" class="social-li">linkedin</a></li>
				<li><a href="#" class="social-fb">facebook</a></li>
			</ul>
		</div>-->
		
		<div class='row-fluid' style='margin:0%; padding:0%;'>		
				<!--<div class="sidebar1 offset1" style='width:225px; margin-bottom:0%; padding-bottom:0%;'>
					<h3 class='blue-font' style='padding-top:2%;'>Buy Products</h3>
						<nav>
							<ul>
								<li><a href="#">Overview</a></li>
								<li><a href="#" class="selected">DiSC Products</a>
									<ul>
										<li><a href="#" class="selected">Everything DiSC Profiles</a>
											<ul>
												<li><a href="#">Workplace</a></li>
												<li><a href="#" >Work of Leaders</a></li>
												<li><a href="#">Management</a></li>
												<li><a href="#">Sales</a></li>
												<li><a href="#">Etc.</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Non-DiSC Products</a></li>
								<li class="last"><a href="#">EPIC Credits</a></li>
							</ul>
						</nav>
				</div>-->
		
	<!-- end .sidebar1 -->
						
					<div class='row-fluid'>						
						<div class='span8' style='background-color:white; padding-left:30px; padding-top:0.7%; padding-right: 30px; min-height: 460px;'>
							<h1 class='blue-font'>DISC Case Studies</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
								Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								
							<div id="tabs" class='' style='margin-top:30px;' >
								<ul class="nav nav-tabs tab-list">
									<li id='tab-1' class="active custom-tab-select" >
										<a class='cursor-pointer everything-id'>Everything DiSC</a>
									</li>
									<li id='tab-2' class='custom-tab-select'>
										<a class='cursor-pointer classic-id'>DiSC Classic</a>
									</li>
									<li id='tab-3' class='custom-tab-select'>
										<a class='cursor-pointer non-id'>Non-DiSC Assessment</a>
									</li>
								</ul>
								<div id='tab-content'>
									<div class='tab-1'>
										<ul class='blue-font'>
											<li>
											Change Management and Customer Service with Everything DiSC Tools
											</li><br>
											<li>
											Using Everything DiSC Tools in an Agricultural Coop
											</li><br>
											<li>
											Using Everything DiSC Management to Decrease Turnover and Reduce Stress
											</li><br>
											<li>
											Using Everything DiSC Management and Comparison Reports with a Leadership Team
											</li><br>
											<li>
											Using Everything DiSC Management to Build Better Relationships
											</li><br>
											<li>
											Improving a Sales Force with Everything DiSC Sales
											</li><br>
											<li>
											Using Everything DiSC Sales with a Financial Services Firm
											</li><br>
											<li>
											Getting Results with Everything DiSC Sales											
											</li><br>
											<li>
											Save Curriculum Development Time Using Everything DiSC Sales
											</li><br>
										</ul>
									</div>
									<div class='tab-2' style='display:none;'>
										<h1>Hello World 2</h1>
									</div>
									<div class='tab-3' style='display:none;'>
										<h1>Hello World 3</h1>
									</div>
								</div>							
						</div>	
							<p style='padding-top:30px; margin-bottom:20px;'> For more information about keyword 1, keyword 2, or keyword 3, please call us at
							877-311-DISC (3472) or fill out our contact form.</p>
						
						</div>
						<div class='span4' style='padding-top:0%; text-align: center; margin-top:0%;'>							
							<ul class="socialMedia row-fluid" style='margin-top:0%; padding-bottom:0%; padding-top:0%; margin-bottom:0%; display:inline; padding-left:30px;'>
								<li><a href="#" class="social-tw">twitter</a></li>
								<li><a href="#" class="social-go">google+</a></li>
								<li><a href="#" class="social-li">linkedin</a></li>
								<li><a href="#" class="social-fb">facebook</a></li>
							</ul>
							<div class='span8'>
							<h3 class='blue-font'>  Related DiSC Products</h3><br><br>	
							<img width='150px' src='static/images/software-box.jpg'>
							<h4 class='blue-font'>  Everything DISC Workplace</h4><br><br>
							<img width='150px' src='static/images/software-box.jpg'>
							<h4 class='blue-font'>  Everything DISC Management</h4><br><br>
							</div>
						</div>	
					</div>
	</div> 
	
  <!-- ending #container -->
 <!-- ending #content-body-->
 
 <?php include 'footer.php'; ?>
 
 <script>
   $( document ).ready(function() {
        $(".custom-tab-select").on("click", function( e ) {			
				var current = $('.tab-list').find('.active').attr('id');
				var current-id = '#' + current
				var current-tab = '.' + current				
				$(current-id).removeClass('active');
				$(this).addClass('active');
				var id = $(this).attr("id");
				var id-id = '.' + id				
				$('#tab-content').find(current-tab).hide();				
				$('#tab-content').find(id-id).show();						
		});
	});
 
 </script>
   </body>
</html>