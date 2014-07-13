<div class='container-fluid' style='padding:0px; margin-left:0px; margin-right:0px;'>
  <div class="sectionextras row-fluid">
  <div class="margin_left_5_percent sectioncolumns container-fluid">
  <?php 
  While($top_footer_array = mysql_fetch_array($top_footer)){
	$heading = $top_footer_array['heading'];
	$icon = $top_footer_array['icon'];
	$link = $top_footer_array['link'];
	$link_name = $top_footer_array['link_name'];
	$content = $top_footer_array['content'];
	echo '<div class="extrascol-01 span4 margin_none " > 
		<div class="hidden-phonex pading_top_2_percent padding_bottom_2_percent margin_right_none" >
			<div class="margin_right_18_percent margin_left_none" ><img class="margin_top_negative_4_percent" src="';
			
	echo 'http://www.internalchange.com/ee/themes/site_themes/center_for_internal_change/images/icon-casestudy.png" width="50" height="56"  alt="" align="right"/>';
	echo '<h4>' . $heading . '</h4>';
	echo '<p class="extraTitle"><a href="' . $link . '">' . $link_name . '</a></p>';
	echo '<p>' . $content . '</p>';
	echo'	</div>	
		</div>
	</div>';
	}
	?>
	<div class='collumn2 span4' style='margin:0px;'>
		<h4 style='margin-top:20px; margin-bottom:0px;' >Share This Link</h4></br>
		<!-- AddThis Button BEGIN -->
		<div style='margin-top:0px;' class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_preferred_1"></a>
		<a class="addthis_button_preferred_2"></a>
		<a class="addthis_button_preferred_3"></a>
		<a class="addthis_button_preferred_4"></a>
		<a class="addthis_button_compact"></a>
		<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=internalchange"></script>
		<!-- AddThis Button END -->		
		<h5>Free email newsletter</h5>
		<input id='signup_email' style='margin-bottom:0px; margin-right:5px;' type='text'></input><div id='signup_email_button' class='btn'>Sign Up</div></br>
		<p style='margin-top:0px;'>Email address(example: info@abc.com)</p>
	</div>
    <div class="clearfloat"></div>
  </div>
</div>
</div>
 <div style="margin-left:0px; margin-right:0px;">
	<div style='background-image:url("<?php echo $dir . 'static/images/blue_big_footer.png'; ?>");' class="fatfooter">
		<div class="footercolumns"> 
			<div class=' white-text'>
				<div style='' class='row-fluid '>
				<?php 
					$i = 1;
					While($bottom_footer_array = mysql_fetch_array($bottom_footer)){
						$title = $bottom_footer_array['title'];
						$id = $bottom_footer_array['id'];
						$num = (string)$i;
						echo '<div class="column0' . $num . ' span2 padding_none padding_left_35 width_269" style="margin:0px;">';
						echo '<h3 class="line_height_20">' . $title . '</h3>';
																	
						$bottom_footer_content_query = mysql_query("SELECT * FROM `footer_column_content` WHERE `column_id`=$id ORDER BY `display_order` ASC");
						echo '<ul class="color_white margin_left_17">';
						While($bottom_footer_content_array = mysql_fetch_array($bottom_footer_content_query)){
							$content_name = $bottom_footer_content_array['value'];
							$content_link = $bottom_footer_content_array['link'];							
							echo '<li><a href="' . $content_link . '">' . $content_name . '</a></li>';
						}
						echo '</ul>';
						$i ++;
						echo '</div>';
					}
				?>
				
			<div class="clearfloat"></div>
				</div>
			</div>
		</div>
		<div class='container'>
			<div class='row-fluid span12'>
				<div class='span10 offset1 border_top_grey margin_bottom_none height_1'>
				</div>
			</div>
			<div class='row-fluid span12 margin_top_none' >
				<address class='span12'>
					Glenview, IL 60025 - USA - (847) 906-DISC or Toll Free (877) 311-DISC (3472) -  Fax: (312) 873-3868  |  <a style='text-decoration:underline;' href='#'>Copyright</a> 2002-2014 Center for Internal Change, Inc. All rights reserved.
				</address>
			</div>
		</div>
	</div>
	<div class="footerlogos">
		<img src="http://www.internalchange.com/ee/themes/site_themes/center_for_internal_change/images/logo-inscape-dist.gif" width="151" height="87"  alt=""/>
		<a href="http://www.bbb.org/"><img src="http://www.internalchange.com/ee/themes/site_themes/center_for_internal_change/images/logo-bbb.gif" width="48" height="87"  alt=""/></a>
		<a href="http://www.authorize.net/"><img src="http://www.internalchange.com/ee/themes/site_themes/center_for_internal_change/images/logo-authorize.gif" width="86" height="87"  alt=""/></a>
		<img src="http://www.internalchange.com/ee/themes/site_themes/center_for_internal_change/images/logo-inscape-trainer.gif" width="148" height="87"  alt=""/>
	</div>
  <!--<div class="legalDiv">DiSC® is a registered trademark of Inscape Publishing, Inc., formerly Carlson Learning Company previously Performax (also known as the DiSC Classic Profile DISC Assessment or disc styles profile, 
	dics , disc online profile, disc profle, survey or profiling System, the disc inventory, disc profile, Carlson Learning Profile, personality profile test, questionnaire, disc behavioral assessment, or instrument), 
	Personal Profile System, Adventures in Attitudes, Biblical DISC, Dimensions of Leadership Profile, Discovering Diversity Profile, I-Sight, Personal Development Profile, Personal Learning Insights Profile, 
	disc preview or the Personal Listening Profile, Personal Profile Preview, Center for Internal Change, Inc's John C Goodman, MSOD, LCSW is an authorized distributor of Inscape Publishing, Inc. and neither he nor 
	the corporation are legally responsible for the content or accuracy of any products on this site including, but not limited to products by Inscape Publishing, Inc., their strategic partners, CRK Interactive, 
	Inc. or other products sold on this site in a distributor or associate capacity. Time Mastery Profile, and Role Behavior Analysis are trademarks of Inscape Publishing, Inc.. Center for Internal Change, Inc. 
	and John C Goodman, MSOD, LCSW are not responsible for the use or application of these products by purchasers or end users. These products are not intended to be used as hiring instrument, but as an employee 
	development workplace tool. Privacy Policy. </div>
	-->
</div>

 <!-- JS -->
<script src="/~internal/cic/static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src='/~internal/cic/static/bootstrap/js/bootstrap-transition.js' type='text/javascript'></script>
<script src="/~internal/cic/static/js/onload.js" type="text/javascript"></script>
<script src="/~internal/cic/static/js/main.js" type="text/javascript"></script>
<script src="/~internal/cic/static/js/hoverIntent.min.js" type="text/javascript"></script>
<!--<script src="/~internal/cic/static/ResponsiveMultiLevelMenu/js/jquery.dlmenu.js"></script>-->
<!--<script src="/~internal/cic/static/mean_menu/jquery.meanmenu.js"></script> -->


 <script> 

 
  $( document ).ready(function() {
	if($(window).width() > 500){	
		$('.product_mobile').remove();
	
		}
	if($(window).width() < 500){
		$('.product_desktop').remove();
		}		
	});
 
   $(".submit_form").on("change", function() {	
		$('#select_products_form').submit();
		});	
		
   $(".submt_form_mobile").on("change", function() {	
		$('#select_products_form').submit();
		});	
		
 $( document ).ready(function() {
	if($(window).width() > 500){

		$('.individual_product_right_column').addClass('margin_left_20');
	}
 });
 
 $('#print_page').on('click', function(){
	 window.print(); 
 });

 
     $(function() {
        $("#bookmarkme").click(function() {
            // Mozilla Firefox Bookmark
            if ('sidebar' in window && 'addPanel' in window.sidebar) { 
                window.sidebar.addPanel(location.href,document.title,"");
            } else if( /*@cc_on!@*/false) { // IE Favorite
                window.external.AddFavorite(location.href,document.title); 
            } else { // webkit - safari/chrome
                alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
            }
        });
    });
 
 $('#signup_email_button').on('click', function(){
		$('.error4').hide();
		$('.error5').hide();
		var hasError = false; 
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var emailaddressVal = $("#signup_email").val();
		if(emailaddressVal == '') {			 
		$("#signup_email").before('<span class="error4">  Please enter your email address.</span>').show();
		hasError = true;   } 
		else if(!emailReg.test(emailaddressVal)) {
		$("#signup_email").before('<span class="error4">  Please enter a valid email address.</span>').show();
		hasError = true;	} 
	
		if(hasError == true){
			return false;
		
		}
		else{
			var email = $("#signup_email").val();
			var url = "<?php echo $dir . 'admin/add-email/' ?>";
			$.ajax({
				type: 'POST',
				//dataType: "json",	
				url: url,
				data: {
						'table':'email_signup',
						'level': email
							}, 
				success: 
				function(response){	
				$("#signup_email").val('');
				$("#signup_email").blur();
				
				}
			});
		
		}
 
 });
 
 $("#signup_email").keyup(function(event){
    if(event.keyCode == 13){
        $("#signup_email_button").click();
    }
});

 $( document ).ready(function() {
	if($(window).width() < 500){


	$('.first_slider_category').addClass('top_grey_border');
	}

	if($(window).width() > 420){

	$('.slider_content_area').addClass('width_68');
	$('.slider_descriptions').addClass('width_32');
	
	}
	
});
	
   $( document ).ready(function() {
        $(".custom-tab-select").on("click", function( e ) {			
				var current = $('.tab-list').find('.active').attr('id');
				var current_id = '#' + current
				var current_tab = '.' + current				
				$(current_id).removeClass('active');
				$(this).addClass('active');
				var id = $(this).attr("id");
				var id_id = '.' + id				
				$('#tab-content').find(current_tab).hide();				
				$('#tab-content').find(id_id).show();						
		});
	});
 

	/*$(function() {
		$( '#dl-menu' ).dlmenu();
	});
	
	$(document).ready(function () {
		$('.angry_nav').meanmenu({
			meanRevealPosition: "left",
			meanScreenWidth: "765"
		});
	});
	*/
	
	$(function(){
		$('#menu').slicknav({
			allowParentLinks: 'true'	
		});
	});

	
	$(document).ready(function() {
		
 		if ($(window).width() < 750){			
			$( ".slicknav_menu" ).css('display', 'block');			
		}
		else{			
			$( ".slicknav_menu" ).css('display', 'none');	
		
		};	
	});
	
$('.slider_category').on('click', function(){
	$('.slider_category').removeClass('light_grey_background');
	$(this).addClass('light_grey_background');
	$('.slider_image').hide();
	var show_me = '#' + $(this).data("id");
	$(show_me).show();
});
 </script>
</body>
</html>