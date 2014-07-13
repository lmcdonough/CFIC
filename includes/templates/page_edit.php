<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Navigation - MoodStrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="style/jquery-ui-1.9.2.custom.min.css"> 
  <!-- Calendar -->
  <!--<link rel="stylesheet" href="style/fullcalendar.css">
  <!-- prettyPhoto -->
  <!--<link rel="stylesheet" href="style/prettyPhoto.css">  
  <!-- Star rating -->
  <!--<link rel="stylesheet" href="style/rateit.css">
  <!-- Date picker -->
  <!--<link rel="stylesheet" href="style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="style/jquery.cleditor.css"> 
  <!-- Uniform -->
  <!--<link rel="stylesheet" href="style/uniform.default.css"> 
  <!-- Uniform -->
  <!--<link rel="stylesheet" href="style/daterangepicker-bs3.css" />
  <!-- Bootstrap toggle -->
  <!--<link rel="stylesheet" href="style/bootstrap-switch.css">
    <!-- Bootstrap toggle -->
  <!--<link rel="stylesheet" href="js/datatables/css/dataTables.bootstrap.css">
  <!-- Main stylesheet -->
  <link href="style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="style/widgets.css" rel="stylesheet">   
    <!-- Gritter Notifications stylesheet -->
  <!--<link href="style/jquery.gritter.css" rel="stylesheet">   
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>
<header>
<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="container">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
      <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
		  <!-- Site name for smallar screens -->
		  
		  <a href="index.html" class="navbar-brand">CFIC<span class="bold"></span></a>
		</div>
	
      <!-- Navigation starts -->
	  <!--
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
        -->
        <!-- Links -->
		
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="img/user1.png"> John <span class="bold">Doe</span> <b class="caret"></b>              
            </a>            
            <!-- Dropdown menu -->			
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
              <li><a href="login.html"><i class="fa fa-key"></i> Logout</a></li>
            </ul>
          </li>	
        </ul>
      </nav>

    </div>
  </div>
</header>
<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->       
		  <li><a href="navigation.php" class="open"><i class="fa fa-table"></i> <span>Navigation</span></a></li>
		  <li><a href="pages.php" class="open"><i class="fa fa-table"></i> <span>Pages</span></a></li>
        </ul>
    </div>
    <!-- Sidebar ends -->

  	  	<!-- Main bar -->
  	<div class="mainbar">      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left">Forms</h2>
        <div class="clearfix"></div>
        <!-- Breadcrumb -->
        <div class="bread-crumb">
          <a href="index.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Forms</a>
        </div>
        
        <div class="clearfix"></div>
	    </div>

	    <div class="matter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="widget">                
							<div class="widget-head">
								 <div class="pull-left">Forms</div>
								 <div class="widget-icons pull-right">
									<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
									<a href="#" class="wsettings"><i class="fa fa-wrench"></i></a>  
									<a href="#" class="wclose"><i class="fa fa-times"></i></a>
								 </div>
								 <div class="clearfix"></div>
							</div>
							<div class="widget-content">
								<div class="padd">
									<h6>Input Boxes</h6>
									<hr />
									<!-- Form starts.  -->
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label class="col-lg-2 control-label">CLEditor</label>
											<div class="col-lg-10">
												<textarea class="cleditor" name="input"></textarea>
											</div>
										</div>
									</form>
									<br><hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2014 | <a href="#">CFIC</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script> <!-- jQuery -->
<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="js/languages/jquery.validationEngine-en.js"></script> <!-- jQuery Validation Engine Language File -->
<script src="js/jquery.validationEngine.js"></script> <!-- jQuery Validation Engine -->
<script src="js/sparklines.js"></script> <!-- Sparklines -->
<script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="js/jquery.uniform.min.js"></script> <!-- jQuery Uniform -->
<script src="js/jquery.slimscroll.min.js"></script> <!-- jQuery SlimScroll -->
<script src="js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="js/jquery.maskedinput.min.js"></script> <!-- jQuery Masked Input -->
<script src="js/jquery.icheck.min.js"></script> <!-- jQuery iCheck -->
<script src="js/dropzone.js"></script> <!-- jQuery Dropzone -->
<script src="js/filter.js"></script> <!-- Filter for support page -->
<script src="js/custom.js"></script> <!-- Custom codes -->
<script src="js/charts.js"></script> <!-- Charts & Graphs -->
<script>
$(document).ready(function(){   
  $(".validate").validationEngine();
  $.mask.definitions['^']='[1-9]';
    $('#inputDate').mask('99/99/9999');
    $('#inputPhone').mask('(999) 999-9999');
    $('#inputPhoneExit').mask("(999) 999-9999? x99999");
    $('#inputIntPhone').mask("+33 (999) (999-9999)");
    $('#inputTaxID').mask("99-9999999");
    $('#inputSSN').mask("999-99-9999");
    $('#inputProductKey').mask("a*-999-a999");
    $('#inputEyeScript').mask("~9.99 ~9.99 999");
    $('#inputPurchaseOrder').mask("aaa-999-***");
    $('#inputPercent').mask("99%");

    $('.skin-minimal input').iCheck({
      checkboxClass: 'icheckbox_minimal',
      radioClass: 'iradio_minimal',
      increaseArea: '20%'
    });
    $('.skin-square input').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
      increaseArea: '20%'
    });
    $('.skin-flat input').iCheck({
      checkboxClass: 'icheckbox_flat-red',
      radioClass: 'iradio_flat-red'
    });
    $('.skin-line input').each(function(){
      var self = $(this),
        label = self.next(),
        label_text = label.text();

      label.remove();
      self.iCheck({
        checkboxClass: 'icheckbox_line-blue',
        radioClass: 'iradio_line-blue',
        insert: '<div class="icheck_line-icon"></div>' + label_text
      });
    });
    $('.colors li').click(function() {
      var self = $(this);

      if (!self.hasClass('active')) {
        self.siblings().removeClass('active');

        var skin = self.closest('.skin'),
          color = self.attr('class') ? '-' + self.attr('class') : '',
          checkbox = skin.data('icheckbox'),
          radio = skin.data('iradio'),
          checkbox_default = 'icheckbox_minimal',
          radio_default = 'iradio_minimal';

        if (skin.hasClass('skin-square')) {
          checkbox_default = 'icheckbox_square', radio_default = 'iradio_square';
          checkbox == undefined && (checkbox = 'icheckbox_square-green', radio = 'iradio_square-green');
        };

        if (skin.hasClass('skin-flat')) {
          checkbox_default = 'icheckbox_flat', radio_default = 'iradio_flat';
          checkbox == undefined && (checkbox = 'icheckbox_flat-red', radio = 'iradio_flat-red');
        };

        if (skin.hasClass('skin-line')) {
          checkbox_default = 'icheckbox_line', radio_default = 'iradio_line';
          checkbox == undefined && (checkbox = 'icheckbox_line-blue', radio = 'iradio_line-blue');
        };

        checkbox == undefined && (checkbox = checkbox_default, radio = radio_default);

        skin.find('input, .skin-states .state').each(function() {
          var element = $(this).hasClass('state') ? $(this) : $(this).parent(),
            element_class = element.attr('class').replace(checkbox, checkbox_default + color).replace(radio, radio_default + color);

          element.attr('class', element_class);
        });

        skin.data('icheckbox', checkbox_default + color);
        skin.data('iradio', radio_default + color);
        self.addClass('active');
      };
    });
});
</script>
</body>
</html>